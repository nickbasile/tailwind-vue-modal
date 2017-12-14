<template>
    <div v-if="modal.visible" @click.self="dismissModal" class="pin absolute flex items-center justify-center bg-transparent-black">
        <div class="bg-white rounded shadow p-8 m-4 max-w-lg max-h-full text-center overflow-y-scroll">
            <div class="mb-4">
                <h1>{{ modal.header }}</h1>
            </div>
            <div class="mb-8">
                <p>{{ modal.body }}</p>
            </div>
            <div>
                <button class="text-white py-2 px-4 rounded" :class="typeColor" @click="dismissModal">Ok</button>
            </div>
        </div>
    </div>
</template>

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
          },
          dismissModal() {
              return vueModal().dismiss();
          }
        }
    }
</script>
