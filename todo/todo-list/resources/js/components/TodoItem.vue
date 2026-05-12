<template>
    <div
        :class="[
            'group bg-white rounded-xl border p-4 transition-all hover:shadow-md',
            todo.completed ? 'border-gray-200 opacity-75' : 'border-gray-200'
        ]"
    >
        <div v-if="isEditing" class="space-y-3">
            <input
                v-model="editTitle"
                type="text"
                class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:bg-white"
            />
            <textarea
                v-model="editDescription"
                placeholder="Description"
                rows="2"
                class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:bg-white resize-none"
            />
            <div class="flex gap-2 justify-end">
                <button
                    @click="cancelEdit"
                    class="px-3 py-1.5 text-sm text-gray-600 hover:bg-gray-100 rounded-lg transition-colors cursor-pointer"
                >
                    Cancel
                </button>
                <button
                    @click="handleSave"
                    class="px-3 py-1.5 text-sm bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors cursor-pointer"
                >
                    Save
                </button>
            </div>
        </div>

        <div v-else class="flex items-start gap-3">
            <button
                @click="$emit('toggle')"
                :class="[
                    'mt-1 w-5 h-5 rounded-full border-2 flex items-center justify-center transition-colors cursor-pointer',
                    todo.completed
                        ? 'bg-green-500 border-green-500 text-white'
                        : 'border-gray-300 hover:border-gray-400'
                ]"
            >
                <svg v-if="todo.completed" class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
            </button>
            <div class="flex-1 min-w-0">
                <h3 :class="['font-medium text-gray-900', todo.completed ? 'line-through text-gray-400' : '']">
                    {{ todo.title }}
                </h3>
                <p
                    v-if="todo.description"
                    :class="[
                        'text-sm mt-0.5',
                        todo.completed ? 'text-gray-300 line-through' : 'text-gray-500'
                    ]"
                >
                    {{ todo.description }}
                </p>
            </div>
            <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                <button
                    @click="startEdit"
                    class="p-1.5 text-gray-400 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors cursor-pointer"
                    title="Edit"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </button>
                <button
                    @click="$emit('delete')"
                    class="p-1.5 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors cursor-pointer"
                    title="Delete"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({ todo: { type: Object, required: true } });
const emit = defineEmits(['toggle', 'delete', 'update']);

const isEditing = ref(false);
const editTitle = ref(props.todo.title);
const editDescription = ref(props.todo.description || '');

const startEdit = () => {
    editTitle.value = props.todo.title;
    editDescription.value = props.todo.description || '';
    isEditing.value = true;
};

const cancelEdit = () => {
    isEditing.value = false;
    editTitle.value = props.todo.title;
    editDescription.value = props.todo.description || '';
};

const handleSave = () => {
    if (!editTitle.value.trim()) return;
    emit('update', { title: editTitle.value.trim(), description: editDescription.value.trim() });
    isEditing.value = false;
};
</script>
