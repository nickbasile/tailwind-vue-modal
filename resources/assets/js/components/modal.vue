<template>
    <div v-if="modal.visible" @click.self="modal.visible = false">
        <div>
            <div>
                <h1>{{ modal.header }}</h1>
            </div>
            <div>
                <p>{{ modal.body }}</p>
            </div>
            <div>
                <button>Ok</button>
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
              });

              window.bus.$on('dismiss-modal', () => {
                  this.modal.visible = false;
              });
          }
        }
    }
</script>
