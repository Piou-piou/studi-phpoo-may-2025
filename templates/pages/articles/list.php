<table>
    <thead>
        <tr>
            <th>Titre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['articles'] as $article): ?>
            <tr>
                <td><?php echo $article->title ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


