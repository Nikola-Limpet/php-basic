<template>
    <form @submit.prevent="handleSubmit" class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
        <div class="flex gap-3">
            <input
                v-model="title"
                type="text"
                placeholder="What needs to be done?"
                class="flex-1 px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:bg-white transition-all"
            />
            <button
                type="submit"
                class="px-5 py-2.5 bg-gray-900 text-white rounded-lg font-medium hover:bg-gray-800 transition-colors cursor-pointer"
            >
                Add
            </button>
        </div>
        <div class="mt-2 flex items-center gap-2">
            <button
                type="button"
                @click="showMore = !showMore"
                class="text-sm text-gray-500 hover:text-gray-800 transition-colors cursor-pointer"
            >
                {{ showMore ? 'Hide description' : '+ Add description' }}
            </button>
        </div>
        <textarea
            v-if="showMore"
            v-model="description"
            placeholder="Add a description..."
            rows="3"
            class="w-full mt-3 px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:bg-white transition-all resize-none"
        />
    </form>
</template>

<script setup>
import { ref } from 'vue';

const title = ref('');
const description = ref('');
const showMore = ref(false);

const emit = defineEmits(['add']);

const handleSubmit = () => {
    if (!title.value.trim()) return;
    emit('add', {
        title: title.value.trim(),
        description: description.value.trim(),
        completed: false,
    });
    title.value = '';
    description.value = '';
    showMore.value = false;
};
</script>
