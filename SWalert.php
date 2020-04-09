<!DOCTYPE html>
<html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>

<h1>The button Element</h1>

<button type="button" onclick="alert('Hello world!')">Click Me!</button>

</body>
<?php if(true): ?>
  <script>
  swal("Good job!", "You clicked the button!", {
    icon : "error",
    buttons: {
      cancel: "Run away!"
    },
  })
  .then((value) => {
        location.href='index_admin.php';
  });

  </script>
<?php endif ?>
</html>
