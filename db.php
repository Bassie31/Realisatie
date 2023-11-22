 -- Tabelstructuur voor tabel `assist`
--

CREATE TABLE `assist` (
  `Assist_ID` int(11) NOT NULL,
  `Goal_ID` int(11) NOT NULL,
  `MinuteAssisted` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `goal`
--

CREATE TABLE `goal` (
  `Goal_ID` int(11) NOT NULL,
  `Match_ID` int(11) NOT NULL,
  `Player_ID` int(11) NOT NULL,
  `Team_ID` int(11) NOT NULL,
  `MinuteScored` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match`
--

CREATE TABLE `match` (
  `Match_ID` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Referee` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `player`
--

CREATE TABLE `player` (
  `Player_ID` int(11) NOT NULL,
  `Name` int(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Team_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `team`
--

CREATE TABLE `team` (
  `Team_ID` int(11) NOT NULL,
  `TeamName` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Stadium` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
