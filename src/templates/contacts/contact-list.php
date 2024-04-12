<div class="contact-list">
    <div class="scroll-area">
        <?php foreach ($contacts as $contact) : ?>
            <form class="contact-element" action="POST">
                <div class="contact-image" style="background-color: <?= $contact['color'] ?>">
                    <?= mb_substr(ucfirst($contact['name']), 0, 1) ?>
                </div>
                <div class="contact-name"><?= $contact['name'] ?></div>
                <div class="contact-number"><?= $contact['number'] ?></div>
                <input class="contact-button" type="submit" value="Удалить">
            </form>
        <?php endforeach; ?>
    </div>
</div>