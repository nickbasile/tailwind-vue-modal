<template>
    <div v-if="modal.visible" @click.self="modal.visible = false" class="h-screen w-full absolute flex items-center justify-center bg-modal">
        <div class="bg-white rounded shadow p-8 m-4 max-w-lg max-h-full text-center overflow-y-scroll">
            <div class="mb-4">
                <h1>{{ modal.header }}</h1>
            </div>
            <div class="mb-8">
                <p>{{ modal.body }}</p>
            </div>
            <div class="flex justify-center">
                <button class="flex-no-shrink text-white py-2 px-4 rounded" :class="typeColor" @click="modal.visible = false">Ok</button>
            </div>
        </div>
    </div>
</template>

<style>
    .bg-modal {
        background: rgba(0,0,0,.2);
    }
</style>

<script>
    import VueModal from './modal.js';

    export default {
        data() {
          return {
              modal: {
                  header: 'Header',
                  body: 'Body',
                  type: 'default',
                  visible: false,
              }
          }
        },
        computed: {
          typeColor() {
              let color;

              switch(this.modal.type) {
                  case 'success':
                      color = 'bg-green hover:bg-green-dark'
                      break;
                  case 'error':
                      color = 'bg-red hover:bg-red-dark'
                      break;
                  case 'info':
                      color = 'bg-blue hover:bg-blue-dark'
                      break;
                  case 'warning':
                      color = 'bg-yellow hover:bg-yellow-dark'
                      break;
                  default:
                      color = 'bg-teal hover:bg-teal-dark'
              }

              return color;
          }
        },
        created() {
            this.initModal();
        },
        methods: {
          initModal() {
              window.vueModal = (header = null, body = null, type = null, visible = true) => {
                  return new VueModal(header, body, type, visible)
              };

              this.initListeners();
          },
          initListeners() {
              window.bus.$on('show-modal', (modal) => {
                  this.modal = modal;
                  document.body.classList.add("overflow-hidden");
              });

              window.bus.$on('dismiss-modal', () => {
                  this.modal.visible = false;
                  document.body.classList.remove("overflow-hidden");
              });
          }
        }
    }
</script>
