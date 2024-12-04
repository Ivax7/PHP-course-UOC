<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<style>
  header {
    background-color: gray;
    text-align: center;
    padding: 2em;
  }

</style>
<body>
  
  <ul>
    <?php foreach ($task as $heading => $value) : ?>

      <li>
        <strong><?= ucwords($heading); ?>: </strong><?= $value; ?>
      </li>
    <?php endforeach; ?>
  </ul>


  <ul>
    <li>
      <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <li>
      <strong>Due date: </strong> <?= $task['due']; ?>
    </li>
    <li>
      <strong>Personal Responsible:</strong> <?= $task['assigned_to']; ?>
    </li>
    <li>
      <strong>Status:</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>
  </ul>

</body>
</html>