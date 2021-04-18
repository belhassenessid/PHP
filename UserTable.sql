SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE usertable (
  name varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO usertable (name, password) VALUES
('belha', 'essid'),
('omar', 'adouli'),
('iheb', 'etteyeb'),
('rahma', 'benhassen');

ALTER TABLE usertable
  ADD PRIMARY KEY (name);
COMMIT;
