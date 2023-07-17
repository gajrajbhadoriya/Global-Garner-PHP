<form action="index.php" method="post">
    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $item['name']; ?>">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo $item['description']; ?></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Update Item">
    </div>
</form>