<template>
    <div v-if="todos.length === 0" class="text-center py-16 bg-white rounded-xl border border-dashed border-gray-300">
        <p class="text-gray-400 text-lg">No tasks found</p>
        <p class="text-gray-400 text-sm mt-1">Add a new task to get started</p>
    </div>
    <div v-else class="space-y-3">
        <TodoItem
            v-for="todo in todos"
            :key="todo.id"
            :todo="todo"
            @toggle="$emit('toggle', todo.id)"
            @delete="$emit('delete', todo.id)"
            @update="(u) => $emit('update', todo.id, u)"
        />
    </div>
</template>

<script setup>
import TodoItem from './TodoItem.vue';

defineProps({ todos: { type: Array, required: true } });
defineEmits(['toggle', 'delete', 'update']);
</script>
