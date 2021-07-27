-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 11:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egyptianproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_author`, `comment_content`, `comment_date`) VALUES
(27, 'Adnan', 'a7a', '2021-05-22 00:00:00'),
(42, 'Hakeen', 'moustafa', '2021-05-22 21:00:03'),
(48, 'Ziad', 'a7teen', '2021-05-23 22:58:37'),
(49, 'Adnan', 'Hello', '2021-05-24 13:31:13'),
(50, 'Adnan', 'Hello', '2021-05-24 13:36:27'),
(51, 'Abdelsamad', 'ana ziad beynkni', '2021-05-25 15:34:35'),
(52, 'Ziad', 'hello', '2021-05-28 04:44:43'),
(53, 'mostafa27', 'asdasdasd', '2021-05-28 04:46:08'),
(54, 'Tanya', 'hi', '2021-05-28 11:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments1`
--

CREATE TABLE `comments1` (
  `comment_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `monument_id` int(11) DEFAULT NULL,
  `comment_content` text DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments1`
--

INSERT INTO `comments1` (`comment_id`, `comment_author`, `monument_id`, `comment_content`, `comment_date`) VALUES
(1, 'Adnan', 2, ';kasfajsfnaksjfbasfasf', '2021-05-27 00:00:00'),
(2, 'Ziad', 3, 'a7a neek', '2021-05-31 00:17:01'),
(3, 'Ziad', 1, 'kosomak', '2021-05-28 13:27:36'),
(5, '3antar', 3, 'a7a neek l neek', '2021-05-28 23:08:23'),
(6, 'gbna', 3, 'a7a neek neek neek', '2021-05-28 23:09:04'),
(9, 'Ziad Elshimy', 1, 'asdasdasdasd', '2021-05-29 18:32:49'),
(10, 'Adnan', 1, 'Hey', '2021-05-29 18:34:31'),
(11, 'Ziad', 1, 'hi', '2021-05-29 18:35:44'),
(12, 'Ziad', 11, 'Hi', '2021-05-29 23:43:00'),
(13, 'Ziad', 11, 'Hi', '2021-05-29 23:43:20'),
(17, 'ziad_27', 1, 'Hey', '2021-05-30 02:59:39'),
(18, 'Ziad Magdy', 3, 'Hello there ! it is a nice place.', '2021-06-22 14:10:22'),
(19, 'kosomak', 1, 'hey', '2021-07-22 21:56:47'),
(20, 'kosomeenak', 3, 'a7a neek', '2021-07-22 23:30:52'),
(21, 'ziadshimy7777', 1, 'hello', '2021-07-23 00:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_source` text NOT NULL,
  `monument_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_source`, `monument_id`) VALUES
(1, 'images/djoser.jpg', 1),
(3, 'images/camel.jpg', 1),
(4, 'images/zosr1.jpg', 1),
(8, 'images/khofo1.jpg', 2),
(9, 'images/khofo2.jpg', 2),
(10, 'images/khofo3.jpg', 2),
(11, 'images/khafr1.jpg', 3),
(12, 'images/khafr2.jpg', 3),
(13, 'images/khafr3.jpg', 3),
(14, 'images/mnkr1.jpg', 4),
(15, 'images/mnkr2.jpg', 4),
(16, 'images/mnkr3.jpg', 4),
(17, 'images/sphinx1.jpg', 5),
(18, 'images/sphinx2.jpg', 5),
(19, 'images/sphinx3.jpg', 5),
(20, 'images/teti1.jpg', 6),
(21, 'images/teti2.jpg', 6),
(22, 'images/teti3.jpg', 6),
(23, 'images/der1.jpg', 7),
(24, 'images/der2.jpg', 7),
(25, 'images/der3.jpg', 7),
(26, 'images/mento1.jpg', 8),
(27, 'images/mento2.jpg', 8),
(28, 'images/mento3.jpg', 8),
(29, 'images/kew1.jpg', 9),
(30, 'images/kew2.jpg', 9),
(31, 'images/kew3.jpg', 9),
(32, 'images/seno1.jpg', 10),
(33, 'images/seno2.jpg', 10),
(34, 'images/seno3.jpg', 10),
(35, 'images/abo1.jpg', 11),
(36, 'images/abo2.jpg', 11),
(37, 'images/abo3.jpg', 11),
(38, 'images/karnak1.jpg', 12),
(39, 'images/karnak2.jpg', 12),
(40, 'images/karnak3.jpg', 12),
(41, 'images/valley1.jpg', 13),
(42, 'images/valley2.jpg', 13),
(43, 'images/valley3.jpg', 13),
(44, 'images/luxor1.jpg', 14),
(45, 'images/luxor2.jpg', 14),
(46, 'images/luxor3.jpg', 14),
(47, 'images/ramses1.jpg', 15),
(48, 'images/ramses2.jpg', 15),
(49, 'images/ramses3.jpg', 15),
(50, 'images/tut1.jpg', 16),
(51, 'images/tut2.jpg', 16),
(52, 'images/tut3.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `monuments`
--

CREATE TABLE `monuments` (
  `monument_id` int(11) NOT NULL COMMENT 'Identify Monuments',
  `monument_description` text NOT NULL COMMENT 'A description of the monument',
  `monument_name` varchar(255) NOT NULL COMMENT 'Name of the monument',
  `monument_location` varchar(255) NOT NULL COMMENT 'Where the monument is located in Egypt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monuments`
--

INSERT INTO `monuments` (`monument_id`, `monument_description`, `monument_name`, `monument_location`) VALUES
(1, 'Djoser’s Step Pyramid in Saqqara is one of Egypt’s most iconic monuments—and rightfully so. It constitutes a significant historical turning point in ancient Egyptian funerary monuments, revolutionizing stone architecture and royal burials. In addition to its beauty and monumental scale, it is not only the very first pyramid that the ancient Egyptians ever built, but also the oldest known ancient Egyptian stone structure. The sheer age of the Step Pyramid is astounding. It was built in the early Third Dynasty, during the reign of King Netjerykhet (c.2667–2648 BC), who is now more well-known as Djoser. Before his reign, royal and elite Egyptians were buried in mastabas. This word, meaning “bench” in Arabic, refers to a type of funerary structure that was generally rectangular in shape and built over the tomb proper, which was underground. The Step Pyramid is composed of six stacked mastabas, thus creating the stepped effect. Imhotep, its architect, may very well have been responsible for this major innovation.\r\n\r\n\r\nAt one end of the pyramid complex, a structure known as the South Tomb is believed to have acted as an additional, symbolic, tomb for Djoser, perhaps reflecting his role as the dual king of both Upper and Lower Egypt. Djoser’s pyramid complex also has some unique features. The two courts in front of the pyramid recreate the setting of the Sed Festival, a royal ceremony aimed at rejuvenating the king and regenerating his power. The structures on the side of the eastern court emulate in stone the ephemeral shrines that were used in this festival, thus ensuring that the king could continue being rejuvenated forever.', 'The Step Pyramid Complex of Djoser\r\n', 'Saqqara'),
(2, 'The Great Pyramid is the tomb of King Khufu (c.2589–2566 BC), rendered \"Cheops\" by the Greeks. With its original height of 146.5 meters, it was the tallest structure in the world for 3,800 years. The Great Pyramid still remains the last surviving member of the Seven Wonders of the Ancient World, and took an estimated to 10 to 20 years to build. To this day, it is not entirely certain how this was done.\r\n\r\n            The Great Pyramid is made of local limestone, but its exterior was once entirely covered with high quality limestone. These casing stones were brought from Tura, south of Maadi, by ship. On the inside, the pyramid has three chambers, one cut into the bedrock underneath, and two high up within the masonry itself, a feature that no other pyramid possesses. The sarcophagus in which Khufu was once laid to rest can still be seen in the upper of these two rooms, the King’s Chamber. This room is accessed through the Grand Gallery, a majestic corbelled ascending passage, and a masterpiece of ancient engineering and architecture.\r\n\r\n            Two large and impressive ships were discovered in pits on the south side of the pyramid in a dismantled state. These are believed to have been used to transport the royal mummy and burial equipment to the tomb. The eastern ship has since been reconstructed, and is on display in the Boat Museum, directly above the pit in which it was found.', 'The Great Pyramid', 'Giza Plateau'),
(3, 'Khafre (c.2558–2532 BC), whom the ancient Greeks knew as Khefren, was a son of King Khufu (Cheops), the builder of the Great Pyramid. He built the second pyramid complex at Giza, and constructed his tomb on slightly higher ground, making it appear just as tall as his father’s. At 143.5 meters in height, however, his pyramid is only slightly shorter, and a tremendously impressive monument. Its core masonry is made of blocks of local limestone. The top of the pyramid still preserves the beautifully polished blocks of high-quality limestone that once encased the majority of the structure’s towering height. This white stone was quarried in Tura, south of Maadi, and transported here by ship.\r\n\r\n            The mortuary temple of Khafre at the foot of his pyramid and the valley temple at the end of the causeway are larger than any of those of older pyramids, and also among the best preserved of the Old Kingdom. Another development in the reign of Khafre is the complexity of their layout, with the elements constituting his mortuary temple becoming the new standard that its later Old Kingdom counterparts would follow. A unique feature of Khafre’s complex is the inclusion of a colossal statue beside his valley temple—the Great Sphinx. The valley temple is made of massive limestone blocks encased in granite, floors made of alabaster, and its wide hall features monolithic granite pillars. The symmetrically arranged niches along the walls of the hall once accommodated statues of the king, some of which are currently on display in the Egyptian Museum. One of these, the famous granodiorite statue of Khafre with Horus as a falcon perched behind his head, is widely considered one of the masterpieces of ancient Egyptian art.', 'Pyramid Complex of Khafre', 'Giza Plateau'),
(4, 'Menkaure (Mykerinos to the ancient Greeks; c.2532–2503 BC) is the builder of the third of the three large Giza Pyramids. He was most likely the son of Khafre (Khefren), and grandson of Khufu (Cheops). With a base area that is less than a quarter of their pyramids’, and with an original height of 65 meters, Menkaure’s is by far the smallest of the three. This reduction in size is due to several factors, including the limited amount of space left on the Giza Plateau. The material used for the outer casing of Menkaure’s pyramid is another. Whereas his predecessors had used limestone for this purpose, Menkaure employed granite, which was quarried in Aswan, over 800 km away. In addition to the logistics involved in transportation of the granite blocks, the material itself is much harder than limestone. However, only the bottom quarter of the casing stones are made of granite however, the rest being limestone.\r\n\r\n          Like the Great Pyramid, three smaller pyramids can be seen next to Menkaure’s as well, which were used for the burials of his queens. No satellite pyramid has been discovered, however, but it is believed that the largest of the three queens’ pyramids was in fact originally intended to have been the satellite pyramid.\r\n\r\n           Menkaure died before his pyramid complex was completed, and much of the pyramid’s granite casing blocks were not smoothed. His mortuary and valley temples were intended to consist of colossal limestone blocks encased in granite, but were actually completed with whitewashed mudbrick. Despite this, however, the mortuary cult of Menkaure was practiced for another 300 years after his death.', 'Pyramid Complex of Menkaure', 'Giza Plateau'),
(5, 'Colossal statues are one of the hallmarks of ancient Egyptian civilization, and the Great Sphinx of Giza is the most famous. It was carved directly out of the bedrock during the Fourth Dynasty (c.2613–2494 BC), which also makes it the oldest. Ancient Egyptian sphinxes represented the king with the body of a lion, in a clear demonstration of his power.\r\n\r\n            The evidence points to the Great Sphinx having been carved during the reign of Khafre (Khefren to the ancient Greeks; c.2558–2532 BC), the builder of the second of the Giza pyramids. The Great Sphinx and the temple in front of it, called the Sphinx Temple, lie directly next to Khafre’s valley temple and the lower portion of the causeway leading up to his mortuary temple and pyramid. Careful archaeological analysis has revealed that the valley temple was finished before work was begun on the Great Sphinx and its temple. Analysis of the Great Sphinx’s facial features has also revealed striking similarities with those of Khafre’s statues.\r\n\r\n            The Great Sphinx has captured the imagination of travelers and explorers for millennia, even in ancient Egyptian times. During the Eighteenth Dynasty (c.1550–1295 BC), it came to be seen as a manifestation of the sun god, and was called Horemakhet “Horus in the Horizon”. King Amenhotep II (c.1427–1400 BC) built a temple next to the Sphinx, which he dedicated to this god. His son, Thutmose IV (c.1400–1390 BC), erected a monumental stela between its front paws, called the Dream Stela, on which he recorded a fascinating event.', 'The Great Sphinx', 'Giza Plateau'),
(6, 'Teti (c.2345–2323 BC), the first ruler of the Sixth Dynasty, built his pyramidal complex not far from the Step Pyramid of Djoser (c.2667–2648 BC), in Saqqara. Upon completion, it stood 52.5 m tall. Although it was originally encased in blocks of fine limestone, its core consists of small blocks of local limestone and debris fill. This meant that, when the casing blocks were removed in antiquity, the core, unable to sustain its shape, began to droop. The pyramid appears little different from a natural hill today as a result. Its substructure, however, is intact.\r\n\r\n          A descending passageway turns into a horizontal corridor, which leads to an antechamber. Three magazines for burial equipment lie on the left, but since the pyramid was robbed in antiquity, these were found empty. On the right, west, side is the burial chamber. Its ceiling is decorated with gold stars against a dark blue background, reflecting the ancient Egyptian notion of the tomb as a microcosm of the universe. The end of the corridor, and the entirety of the antechamber and burial chamber are beautifully decorated with Pyramid Texts. These are a collection of rituals and recitations that were designed to ensure the king’s successful journey to the afterlife. The originally intended decorative programme was never completed, however, indicating the king’s untimely death. The third century BC ancient Egyptian priest and historian Manetho recorded that Teti was killed by his bodyguards, but there is little evidence to support this.\r\n\r\n         Some fragments have been discovered of the mortuary temple of Teti’s pyramid complex despite the fact that most of its blocks were robbed in antiquity. His valley temple has not been located yet. A large cemetery for the burials of Teti’s officials lies in front of his pyramid. Some of the grandest and most beautifully decorated tombs of the Old Kingdom are located here, such as the mastabas of the viziers Mereruka and Kagemni.', 'Pyramid Complex of Teti', 'Saqqara'),
(7, 'The celebrated temple of Hatshepsut (c.1473–1458 BC), the queen who became Pharaoh, is located here, in Deir al-Bahari, on the west bank of Luxor. Made up of three man-made terraces that gradually rise up toward the sheer cliff face, this structure is truly a sight to behold.\r\n\r\nThe site of Deir al-Bahari was sacred to Hathor, the goddess who nursed and reared every king, including their mythological ancestor, the god Horus, in Egypt’s primordial past. A manifestation of this goddess was believed to reside in the very hills under whose shadow lies the temple of Hatshepsut, and just on the other side of which is the site of the tombs of some of ancient Egypt’s most famous rulers, the Valley of the Kings. Stelae bearing prayers to Hathor depict her, in cow form, emerging from these mountains. This impressive geological formation features a summit that is naturally pyramid-shaped.\r\n\r\nThis was the reason why king Nebhepetre Mentuhotep (c.2055–2004 BC) chose this hallowed location as the site of his tomb and mortuary temple, 600 years before Hatshepsut set foot here. Royal mortuary temples complemented tombs, and the cults of deceased kings were maintained in these structures for the continued survival of their souls in the hereafter. The most prominent feature of Mentuhotep’s temple-tomb was a monumental structure, believed by some to have been a pyramid, which rose from the center of the main terrace.\r\n\r\nThe temple of Hatshepsut served as a mortuary temple for the female pharaoh and her revered father, Thutmose I. Sunset was regarded as the daily death of the sun god before his glorious rebirth in the east. Given its funerary nature, Hatshepsut’s mortuary temple was built on the west bank of the Nile, directly across the river from the main temple of Amun in Karnak. The statues of this god, his wife Mut, and their son Khonsu left their temples every year during the Beautiful Feast of the Valley, and crossed the Nile to visit the royal mortuary temples, including Hatshepsut’s, which appears to have been one of their most important stops.', 'Deir al-Bahari', 'Luxor'),
(8, 'Mentuhotep Nebheptre, the king who unified Upper and Lower Egypt for the second time after King Narmer. He is depicted wearing the Red Crown and the tight fitting costume of the Sed festival, a jubilee celebrated after 30 years of a reign. His black skin and the position of his crossed arms associate him with the god Osiris, god of death, fertility, and resurrection. The statue was found by chance in 1900 by Howard Carter as he rode through the forecourt of Mentuhotep’s mortuary temple at Deir al-Bahari, when his horse tripped on something. Upon investigation, this turned out to be a stone slab covering a shaft. Carter excavated it, and discovered a small chamber containing the statue intricately wrapped in linen, along with other artifacts.', 'Statue of Mentuhotep', 'The Egyptian Museum'),
(9, 'This is the sarcophagus of Queen Kawit, the wife of King Nebhepetre Mentuhotep, the founder of the Middle Kingdom. The outer faces are beautifully decorated with daily life scenes, in one case depicting her drinking in front of a table laden with food, while one of the maids is hairdressing the queen\'s hair, and a maid pours her next drink. She holds a mirror in her free hand. In another scene, she is shown holding a lotus flower to her nose while dipping her finger in an unguent container held up by a servant. Her chest lies in front of her, the jewelry inside it depicted one on top of the other. Other scenes show cows being milked or calves breastfeeding. The combination of beauty, seen in the mirror, jewelry, and unguent, together with the lotus, the cows, and milk, together form very clear allusions to fertility, youth, rebirth, and Hathor, the goddess of love, beauty, fertility, music, and motherhood.', 'Sarcophagus of Kawit', 'The Egyptian Museum'),
(10, 'Senisert III was a pharaoh of Egypt. He ruled from 1878 BC to 1839 BC during a time of great power and prosperity,[1] and was the fifth king of the Twelfth Dynasty of the Middle Kingdom. He was a great pharaoh of the Twelfth Dynasty and is considered to be, perhaps, the most powerful Egyptian ruler of the dynasty. Consequently, he is regarded as one of the sources for the legend about Sesostris. His military campaigns gave rise to an era of peace and economic prosperity that reduced the power of regional rulers and led to a revival in craftwork, trade, and urban development.[2] Senusret III was among the few Egyptian kings who were deified and honored with a cult during their own lifetime', 'Statue of Senisert III', 'Luxor Museum'),
(11, 'The Great Temple of Abu Simbel, in Nubia near Egypt’s southern border, is among the most awe-inspiring monuments of Egypt. It was cut into the living rock by King Ramesses II (the Great) of the Nineteenth Dynasty, around 1264 BC. The temple is most well known for the four imposing seated colossal statues that dominate its façade. One of these collapsed because of an ancient earthquake, and its fragments can still be seen on the ground.\r\n\r\n          Colossal standing statues of the king line the main hall, leading to the sanctuary where four deities are sat: Amun‑Ra, Ra‑Horakhty, Ptah, and a deified version of Ramesses II. The temple was built with such precision that on two days a year, the 22nd of February and 22nd of October, the sun’s rays enter the temple, cross the main hall, and illuminate the innermost statues. These dates are thought to correspond to the coronation and birthday of Ramesses II.\r\n\r\n          Another rock-cut temple to the north, known as the Small Temple, is dedicated to the goddess Hathor and Ramesses II’s Great Royal Wife, Queen Nefertari. On the façade of the Small Temple, her colossi are the same size as those of her husband, a very rare example of such display.\r\n\r\n           The two temples were moved from their original location in 1968 after the Aswan High Dam was built, which threatened to submerge them. The relocation was completed thanks to an international effort led by UNESCO, and the temple was admitted into the list of World Heritage Sites in 1979.', 'Abu Simbel', 'Aswan'),
(12, 'Aptly called Ipet-Sut “The Most Select of Places” by the ancient Egyptians, Karnak Temple was the most important temple in Thebes (modern Luxor), in Upper Egypt. This was where the cult of the great god Amun of Thebes was conducted. As such, it was extremely wealthy and its priesthood held great political power.\r\n\r\n           Thebes was the city that the line of kings who reunified Egypt after the First Intermediate Period hailed from. It thus became one of the most important cities, a position that it would continue to hold throughout the majority of ancient Egyptian history. The importance of Amun rose in tandem with the city’s rise to prominence. From the earliest evidence for it from the reign of Intef II (c.2112–2063 BC), before even the beginning of the Middle Kingdom (c.2055–1650 BC), to the Graeco-Roman Period (332 BC–395 AD), this temple was accordingly lavished with royal attention in the form construction projects, ritual equipment and other necessities. Nearly every king from the New Kingdom (c.1550–1069 BC), Egypt’s age of empire, left his mark here.\r\n\r\n           The temple is located on the east bank of Luxor. Like most ancient Egyptian temples, it is built on an east–west axis. Ancient Egyptian temples were models of the cosmos, and this layout meant that they mirrored the sun god’s trajectory through the sky. Rather uniquely, however, it also possesses a north–south axis, which orients it towards another temple, the abode of Amenemopet known today as Luxor Temple. This was a different version of Amun specific to south Luxor. The two temples were linked by a processional way lined with sphinxes. This was used in one of the most important celebrations of the ancient Egyptian calendar, the Opet Festival.\r\n\r\n           In addition to the ancient Egyptians’ mastery of stone, which is evident everywhere in the scale of the monuments, the reliefs covering their walls, and the statues populating them, several highlights are worth mentioning. The world-famous Great Hypostyle Hall is a forest of 134 columns. These massive columns have a height of 15 meters, aside from the larger, central, twelve, which stand 21 meters tall. The hall may have been begun by Amenhotep III (c.1390–1352 BC; Eighteenth Dynasty), but the decoration is from the reigns of Nineteenth Dynasty kings Sety I (c.1294–1279 BC) and his son Ramesses II (c.1279–1213 BC). A magnificent obelisk of Hatshepsut (c.1473–1458 BC) in a nearby hall stands at a colossal height of nearly 30 meters. At the eastern end of Karnak is the Akhmenu, a temple by Thutmose III (c.1479–1425 BC) dedicated to the cults of various deities, his royal predecessors, as well as his own cult.\r\n\r\n          Karnak was in reality a complex of temples. The enclosure walls include a full temple to Khonsu in the south-western corner, next to which is the Opet temple, which was built in the Graeco-Roman Period for Opet, a hippopotamus goddess of childbirth. The beautiful sacred lake, where priests purified themselves before carrying out temple rituals, can still be appreciated today. Many more, smaller, temples and chapels dot the landscape of Karnak, making it a veritable open-air museum.', 'Karnak', 'Luxor'),
(13, 'The rulers of the Eighteenth, Nineteenth, and Twentieth Dynasties of Egypt’s prosperous New Kingdom (c.1550–1069 BC) were buried in a desolate dry river valley across the river from the ancient city of Thebes (modern Luxor), hence its modern name of the Valley of the Kings. This moniker is not entirely accurate, however, since some members of the royal family aside from the king were buried here as well, as were a few non-royal, albeit very high-ranking, individuals. The Valley of the Kings is divided into the East and West Valleys. The eastern is by far the more iconic of the two, as the western valley contains only a handful of tombs. In all, the Valley of the Kings includes over sixty tombs and an additional twenty unfinished ones that are little more than pits.\r\n\r\n           The site for this royal burial ground was selected carefully. Its location on specifically the west side of the Nile is significant as well. Because the sun god set (died) in the western horizon in order to be reborn, rejuvenated, in the eastern horizon, the west thus came to have funerary associations. Ancient Egyptian cemeteries were generally situated on the west bank of the Nile for this reason.\r\n\r\n            The powerful kings of the New Kingdom were laid to rest under the shadow of a pyramid-shaped peak rising out of the cliffs surrounding the valley. The selection of even the specific valley in which the royal tombs were excavated was not left to chance. The pyramid was a symbol of rebirth and thus eternal life, and the presence of a natural pyramid was seen as a sign of the divine. This entire area, and the peak itself, was sacred to a funerary aspect of the goddess Hathor: the “Mistress of the West”.\r\n\r\n            The isolated nature of this valley was yet another reason for its selection as the final resting place of Pharaoh. Tomb robberies occurred even in ancient times. The Egyptians were of aware of this and the fate of the Old and Middle Kingdom pyramids, and opted for hidden, underground tombs in a secluded desert valley. The first New Kingdom ruler that is confirmed to have been buried in the Valley of the Kings was Thutmose I (c.1504–1492 BC), the third king of the Eighteenth Dynasty. According to Ineni, the high official who was in charge of the digging of his tomb: “I oversaw the excavation of the cliff-tomb of his Person [the king] in privacy; none seeing, none hearing.”', 'Valley of the Kings', 'Luxor'),
(14, 'Luxor Temple, Ipet‑resyt “Southern Sanctuary” to the ancient Egyptians, was so called because of its location within ancient Thebes (modern Luxor). It is located around three kilometers to the south of Karnak Temple, to which it was once linked with a processional way bordered with sphinxes. The oldest evidence for this temple dates to the Eighteenth Dynasty (c.1550–1295 BC).\r\n\r\n          Ipet‑resyt, unlike most other ancient Egyptian temples, is not laid out on an east‑west axis, but is oriented towards Karnak. This is because Luxor Temple was the main venue for one the most important of ancient Egyptian religious celebrations, when the cult images of Amun, his wife Mut, and their son, the lunar god Khonsu, were taken from their temples in Karnak, and transported in a grand procession to Luxor Temple so they could visit the god that resides there, Amenemopet. This was the Opet Festival.\r\n\r\n          Luxor Temple was not constructed by one single ruler. The oldest existing structure, a shrine, dates to the reign of Hatshepsut (c.1473–1458 BC). The core of the temple was built by Amenhotep III (c.1390–1352 BC). One of the inner rooms contains a series of scenes that are known as the Divine Birth. They tell the amazing story of how the king’s true father was none other than the god Amun himself. The core of the temple is preceded by a columned hall fronted by a courtyard with columns around its perimeter. Amenhotep III also built the Great Colonnade, which consists of two rows of seven colossal columns. Its decoration, most notably the scenes depicting the Opet Festival, were completed by Tutankhamun (c.1336–1327 BC) and Horemheb (c.1323–1295 BC).\r\n\r\n          Ramesses II (c.1279–1213 BC) made many additions to Luxor Temple. In front of the Great Colonnade, he built a peristyle courtyard and a massive pylon, a gate with two towers that formed the entrance into temples. In addition to many colossal statues, the pylon was also fronted by a pair of 25‑meter‑high obelisks made by this great king, but only one remains in place; the other has been at the Place de la Concorde in Paris since 1835–1836.\r\n\r\n          In the late third century AD, the Romans built a fort around the temple, and the first room beyond the hypostyle hall of Amenhotep III became its sanctuary. The original wall reliefs were covered with plaster, and painted in the Graeco‑Roman artistic style, depicting Emperor Diocletian (284–305 AD) and his three coregents. Although these had largely disappeared, efforts are under way to restore these to their former glory.\r\n', 'Luxor Temple', 'Luxor'),
(15, 'This tomb was begun by King Ramesses V (c.1147–1143 BC) of the Twentieth Dynasty. Although it is uncertain whether he was ultimately buried here, it is clear that his uncle Ramesses VI (c.1143–1136 BC) enlarged the tomb and used it for his burial.\r\n\r\n          The tomb is simple in plan, essentially consisting of a series of descending corridors that lead deep underground, in a straight line to the burial chamber. The exquisitely painted sunk relief walls are very well preserved. A decline in the quality of the decoration since the Nineteenth Dynasty (c.1295–1186 BC) is evident, however.\r\n\r\n          The tomb’s decorative programme consists of various funerary texts to help the king in his successful transition to the afterlife. The first descending passages are decorated with the Book of Gates, Book of Caverns, and Books of the Heavens. The passages beyond bear scenes from the Amduat, the Book of the Dead, and the Books of the Heavens, and scenes from the Book of the Earth adorn the burial chamber. All ceilings are decorated with astronomical scenes and texts. Some of these funerary texts are collections of spells, and others are maps of the underworld, describing the sun god’s daily nocturnal journey through it. Through them, just like the sun god, the king could achieve a glorious rebirth in the eastern horizon at dawn.', 'Tomb of Ramesses VI', 'Valley of the Kings'),
(16, 'The tomb of the Eighteenth Dynasty king Tutankhamun (c.1336–1327 BC) is world-famous because it is the only royal tomb from the Valley of the Kings that was discovered relatively intact. Its discovery in 1922 by Howard Carter made headlines worldwide, and continued to do so as the golden artifacts and other luxurious objects discovered in this tomb were being brought out. The tomb and its treasures are iconic of Egypt, and the discovery of the tomb is still considered one of the most important archaeological discoveries to date.\r\n\r\n         Despite the riches it contained, the tomb of Tutankhamun, number 62 in the Valley of the Kings, is in fact quite modest compared to the other tombs on this site, in both size and decoration. This is most likely due to Tutankhamun having come to the throne very young, and even then ruling for only around ten years in total. One can wonder at what riches the much larger tombs of the most powerful kings of the New Kingdom, such as Hatshepsut, Thutmose III, Amenhotep III, and Ramesses II once contained.\r\n\r\n          Only the walls of the burial chamber bear any decoration. Unlike most previous and later royal tombs, which are richly decorated with funerary texts like the Amduat or Book of Gates, which helped the deceased king reach the afterlife, only a single scene from the Amduat is represented in the tomb of Tutankhamun. The rest of decoration of the tomb depict either the funeral, or Tutankhamun in the company of various deities.\r\n\r\n          This small size of the tomb of Tutankhamun (KV62) has led to much speculation. When his successor, the high official Ay, died, he was buried in a tomb (KV23), which may have been originally intended for Tutankhamun, but which had not yet been completed at the time of the death of the young king. The same argument has been made in turn for the tomb of Ay’s successor, Horemheb (KV57). If so, it is unclear for whom the eventual tomb of Tutankhamun, KV62, was carved, but it has been argued that it existed already, either as a private tomb or as a storage area, that was subsequently enlarged to receive the king.\r\n\r\n         Whatever the reason, the small size of the tomb meant that the approximately 3,500 artefacts that were discovered inside were stacked very tightly. These reflect the lifestyle of the royal palace, and included objects that Tutankhamun would have used in his daily life, such as clothes, jewelry, cosmetics, incense, furniture, chairs, toys, vessels made of a variety of materials, chariots, and weapons.\r\n\r\n         It is one of history’s great ironies that Tutankhamun, a relatively minor king who was erased from history because he was related to the unpopular King Akhenaten, has come to surpass many of Egypt’s greatest rulers in fame.', 'Tomb of Tutankhamun', 'Valley of the Kings');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(255) NOT NULL COMMENT 'Full name of the user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`) VALUES
(14, 'ziadshimy77', '2e3ce51b607fd2d4e0ad44b83754a71c', 'ziadshimy77@gmail.com', 'Ziad Magdy Elshimy'),
(42, 'adnan2727', '9bff8680e291dffebe1d445c868ba6df', 'adnan27@gmail.com', 'Adnan nagah'),
(43, 'ziad2727', '2e3ce51b607fd2d4e0ad44b83754a71c', 'Ziadshimy7@gmail.com', 'Ziad Elshimy'),
(45, 'abdelsamadmtnakawi', '2e3ce51b607fd2d4e0ad44b83754a71c', 'abdelsamadziadbeyniko@gmail.com', 'abdelsamadzebi27'),
(46, 'ziadshimy7777', '9bff8680e291dffebe1d445c868ba6df', 'Ziadshimy7@gmail.com', 'Ziad ElShimy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comments1`
--
ALTER TABLE `comments1`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FK_commentmonument` (`monument_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `monument_id` (`monument_id`);

--
-- Indexes for table `monuments`
--
ALTER TABLE `monuments`
  ADD PRIMARY KEY (`monument_id`),
  ADD UNIQUE KEY `monument_name` (`monument_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `comments1`
--
ALTER TABLE `comments1`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `monuments`
--
ALTER TABLE `monuments`
  MODIFY `monument_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identify Monuments', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments1`
--
ALTER TABLE `comments1`
  ADD CONSTRAINT `FK_commentmonument` FOREIGN KEY (`monument_id`) REFERENCES `monuments` (`monument_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`monument_id`) REFERENCES `monuments` (`monument_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
