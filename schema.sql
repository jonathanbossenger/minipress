CREATE TABLE `posts`
(
    `id`      int          NOT NULL,
    `title`   varchar(255) NOT NULL,
    `content` text         NOT NULL
);

ALTER TABLE `posts`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `posts`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;
