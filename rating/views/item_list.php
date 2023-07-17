<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item) : ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['description']; ?></td>
            <td>
                <a href="index.php?action=edit&id=<?php echo $item['id']; ?>">Edit</a>
                <a href="index.php?action=delete&id=<?php echo $item['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>