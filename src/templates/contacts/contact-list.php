<div class="contact-list">
    <div class="scroll-area">

        <?php if (!$contacts) : ?>
            <p>Список контактов пуст</p>
        <?php else : ?>
            <?php foreach ($contacts as $contact) : ?>
                <form class="contact-element" action="/delete" method="POST">
                    <div class="contact-image" style="background-color: <?= $contact['color'] ?>">
                        <?= mb_substr(ucfirst($contact['name']), 0, 1) ?>
                    </div>
                    <input type="text" name="id" value="<?= $contact['id'] ?>" hidden>
                    <div class="contact-name"><?= $contact['name'] ?></div>
                    <div class="contact-number"><?= $contact['number'] ?></div>
                    <input class="contact-button" type="submit" value="Удалить">
                </form>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>