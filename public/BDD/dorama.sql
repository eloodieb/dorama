CREATE TABLE `user` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `pseudo` varchar(255),
  `password` varchar(255)
);

CREATE TABLE `drama` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `shortDescription` varchar(255),
  `longDescription` text,
  `url_img1` varchar(255),
  `url_img2` varchar(255),
  `url_trailer` varchar(255),
  `nbVote` int,
  `userId` int,
  `genreId` int,
  `country` varchar(255),
  `yearRelease` year,
  `create_at` datetime
);

CREATE TABLE `genre` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

ALTER TABLE `drama` ADD FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

ALTER TABLE `drama` ADD FOREIGN KEY (`genreId`) REFERENCES `genre` (`id`);
