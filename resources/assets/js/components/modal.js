let VueModal = class VueModal {
  constructor(header = null, body = null, type = null, visible = true) {
    this.header = header || 'Title';
    this.body = body || 'text';
    this.type = type || 'default';
    this.visible = visible;
  }

  title(header) {
    this.header = header;

    return this;
  }

  text(body) {
    this.body = body;

    return this;
  }

  appearance(type) {
    this.type = type;

    return this;
  }

  success() {
    this.type = 'success';

    return this;
  }

  error() {
    this.type = 'error';

    return this;
  }

  info() {
    this.type = 'info';

    return this;
  }

  warning() {
    this.type = 'warning';

    return this;
  }

  show() {
    window.bus.$emit('show-modal', this);

    return this;
  }

  dismiss() {
    window.bus.$emit('dismiss-modal');

    return this;
  }
};

export default VueModal;