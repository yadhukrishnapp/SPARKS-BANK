SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `transaction_details` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `user_details` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `user_details` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Yadhu', 'yadhu@gmail.com', 100000),
(2, 'Shiva', 'shiva@yahoo.com', 50000),
(3, 'Nandu', 'nan@gmail.com', 25000),
(4, 'Anand', 'anandv@gmail.com', 60000),
(5, 'Manoj', 'mano@gmail.com', 10000),
(6, 'Geetu', 'geetu@yahoo.com', 12000),
(7, 'Madhav', 'madhav@gmail.com', 30000),
(8, 'Abhi', 'abz@gmail.com', 40500),
(9, 'Anjana', 'anju@gmail.com', 35000),
(10, 'Vinod', 'vinu@gmail.com', 80000);



ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction_details`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `user_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;