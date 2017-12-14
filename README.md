A simple configurable modal component built with Vue.js and Tailwind CSS in Laravel. Build it yourself with this [tutorial](https://nick-basile.com/blog/post/build-a-customizable-vuejs-modal-with-tailwind-css) on [Nick Basile's Blog](https://nick-basile.com/blog).

## How To Use:

1. Add the component to any page
```
<modal-component></modal-component>
```

2. Call the modal from that page
```
<script type="text/javascript">
  vueModal().show()
</script>
```

3. You can use a chainable method calls or pass data directly into the methods
```
//Success
vueModal().success().show();

//Error
vueModal().error().show();

//Info
vueModal().info().show();

//Warning
vueModal().warning().show();

//Change Header
vueModal().title('Your Header').show();

//Change Body
vueModal().text('Your Body').show();

//Dismiss a modal
vueModal().dismiss();

//Or
vueModal(header = string, body = string, type = string, visiblity = bool);
```
