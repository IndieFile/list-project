CREATE TABLE `auto` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL
);
INSERT INTO `auto` (`id`, `name`) VALUES
(1, 'Toyota'),
(2, 'Audi'),
(3, 'Mercedes'),
(4, 'Nissan');

CREATE TABLE `models` (
  `id` int(5) NOT NULL,
  `auto_id` int(5) NOT NULL,
  `name` TEXT NOT NULL
);
INSERT INTO `models` (`id`, `auto_id`, `name`) VALUES
(1, 1, 'RAV 4'), 
(2, 1, 'Land'),
(3, 1, 'Land'),
(4, 1, 'Corolla'),
(5, 1, 'Highlander'),
(6, 2, 'A1'),
(7, 2, 'A2'),
(8, 2, 'A3'),
(9, 2, 'A4'),
(10,2, 'A5'),
(11,3, 'A-klasse'),
(12,3, 'B-klasse'),
(13,3, 'C-klasse'),
(14,3, 'G-klasse'),
(15,3, 'S-klasse'),
(16,4, 'Almera'),
(17,4, 'Quashcai'),
(18,4, 'Teana'),
(19,4, 'Juke');