<template>
    <div class="max-w-2xl mx-auto px-4 py-12">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Todo List</h1>
            <p class="text-gray-500">Manage your tasks with Laravel + Vue</p>
        </div>

        <TodoForm @add="addTodo" />

        <div class="flex items-center justify-between mt-8 mb-4">
            <div class="flex gap-2">
                <button
                    v-for="f in ['all', 'active', 'completed']"
                    :key="f"
                    @click="filter = f"
                    :class="[
                        'px-4 py-1.5 rounded-full text-sm font-medium transition-colors cursor-pointer',
                        filter === f
                            ? 'bg-gray-900 text-white'
                            : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-200'
                    ]"
                >
                    {{ f.charAt(0).toUpperCase() + f.slice(1) }}
                </button>
            </div>
            <div class="text-sm text-gray-500">
                {{ activeCount }} active &middot; {{ completedCount }} done
            </div>
        </div>

        <div v-if="loading" class="text-center py-12 text-gray-400">Loading...</div>
        <TodoList
            v-else
            :todos="filteredTodos"
            @toggle="toggleTodo"
            @delete="deleteTodo"
            @update="updateTodo"
        />
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue';
import TodoForm from './TodoForm.vue';
import TodoList from './TodoList.vue';

const todos = ref([]);
const filter = ref('all');
const loading = ref(true);

const fetchTodos = async () => {
    loading.value = true;
    const res = await fetch('/api/todos');
    todos.value = await res.json();
    loading.value = false;
};

onMounted(fetchTodos);

const addTodo = async (todo) => {
    const res = await fetch('/api/todos', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(todo),
    });
    const newTodo = await res.json();
    todos.value.unshift(newTodo);
};

const toggleTodo = async (id) => {
    const todo = todos.value.find((t) => t.id === id);
    const res = await fetch(`/api/todos/${id}`, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ completed: !todo.completed }),
    });
    const updated = await res.json();
    todos.value = todos.value.map((t) => (t.id === id ? updated : t));
};

const updateTodo = async (id, updates) => {
    const res = await fetch(`/api/todos/${id}`, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(updates),
    });
    const updated = await res.json();
    todos.value = todos.value.map((t) => (t.id === id ? updated : t));
};

const deleteTodo = async (id) => {
    await fetch(`/api/todos/${id}`, { method: 'DELETE' });
    todos.value = todos.value.filter((t) => t.id !== id);
};

const filteredTodos = computed(() => {
    if (filter.value === 'active') return todos.value.filter((t) => !t.completed);
    if (filter.value === 'completed') return todos.value.filter((t) => t.completed);
    return todos.value;
});

const activeCount = computed(() => todos.value.filter((t) => !t.completed).length);
const completedCount = computed(() => todos.value.filter((t) => t.completed).length);
</script>
