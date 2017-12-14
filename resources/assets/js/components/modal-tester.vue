<template>
    <div class="lg:w-3/4">
        <div class="flex flex-col mb-4 mx-auto lg:w-1/2">
            <div class="flex flex-col mb-8">
                <label class="block uppercase tracking-wide text-grey-darkest text-sm font-bold mb-2">Modal Header</label>
                <input class="appearance-none block w-full bg-white text-grey-darker border rounded py-3 px-4" v-model="title" placeholder="Modal Header">
            </div>
            <div class="flex flex-col mb-8">
                <label class="block uppercase tracking-wide text-grey-darkest text-sm font-bold mb-2">Modal Body</label>
                <textarea class="appearance-none block w-full bg-white text-grey-darker border rounded py-3 px-4 mb-2 resize-none" v-model="body" rows="9"></textarea>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:justify-between">
            <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-teal hover:bg-teal-dark" @click="showModal()">Default Modal</button>
            <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-green hover:bg-green-dark" @click="showModal('success')">Success Modal</button>
            <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-red hover:bg-red-dark" @click="showModal('error')">Error Modal</button>
            <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-blue hover:bg-blue-dark" @click="showModal('info')">Info Modal</button>
            <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-yellow hover:bg-yellow-dark" @click="showModal('warning')">Warning Modal</button>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                title: 'A Vue.js and Tailwind CSS Modal',
                body: 'Lorem Khaled Ipsum is a major key to success. The key to more success is to get a massage once a week, very important, major key, cloth talk. Hammock talk come soon. It’s important to use cocoa butter. It’s the key to more success, why not live smooth? Why live rough? Stay focused. Let’s see what Chef Dee got that they don’t want us to eat. Lion! The key is to enjoy life, because they don’t want you to enjoy life. I promise you, they don’t want you to jetski, they don’t want you to smile.'
            }
        },
        methods: {
          showModal(type = 'default') {
            return vueModal().title(this.title).text(this.body).appearance(type).show();
          }
        }
    }
</script>
