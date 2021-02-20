-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 11:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  `cat_img` varchar(200) DEFAULT NULL,
  `cat_ban` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`, `status`, `cat_img`, `cat_ban`) VALUES
(1, 'grocery', '1', 'uploads/grocery.jpg', 'uploads/grocery_Cat-Banar.jpg'),
(2, 'beauty', '1', 'uploads/beauty.jpg', 'uploads/beauty_Cat-Banar.jpg'),
(3, 'personal care', '1', 'uploads/person.jpg', 'uploads/personal care_Cat-Banar.jpg'),
(4, 'home', '1', 'uploads/home.jpg', 'uploads/home_Cat-Banar.jpg'),
(5, 'pharmacy', '1', 'uploads/medi.jpg', 'uploads/pharmacy_Cat-Banar.jpg'),
(6, 'baby care', '1', 'uploads/baby.jpg', 'uploads/bab carey_Cat-Banar.jpg'),
(7, 'more', '1', 'uploads/more.jpg', NULL),
(9, 'cosmetics2', '', '129850958_2733690443561771_7547181352691706537_o.jpg', '133441002_838743466950246_3918974105572982881_o.jpg'),
(10, 'qqq', '', '82069079_2788030574593822_5973672241647321088_o.jpg', '73200803_2608360825894132_7211908474110738432_o.jpg'),
(11, 'lipstick', '', '82069079_2788030574593822_5973672241647321088_o.jpg', '87027314_1101478863577650_8579482621581459456_o.jpg'),
(13, 'Suit', '', '51729463_827539384304934_5172384494157561856_o.png', '65213880_2179711848750385_4083680554581491712_n.jpg'),
(17, 'mukta', '', 'gettyimages-144698759-612x612.jpg', 'skyline-aerial-view-skyscrapers-dhaka-600w-705748285.webp');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(30) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `billing_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `Address`, `city`, `country`, `phone`, `email`, `password`, `billing_address`) VALUES
(1, 'yeasin', 'Tanin', 'wirelessgate, dhaka', 'Dhaka', 'Bangladesh', 1992435678, 'yeasintanin@gmail.com', '123456789', 'wirelessgate, dhaka'),
(2, 'shahariar', 'rahman', 'wirelessgate, dhaka', 'Dhaka', 'Bangladesh', 1992435678, 'shahariar@gmail.com', '12345678', 'wirelessgate, dhaka'),
(3, 'Salma', 'Akter', 'wirelessgate3, dhaka', 'dhaka', 'bangladesh', 1982345678, 'salma@gmail.com', '1234567', 'wirelessgate3, dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `payment_id` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `ship_date` date NOT NULL,
  `vat` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `order_number` int(30) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `total_amount` int(30) NOT NULL,
  `bill_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(30) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `type`) VALUES
(1, 'cash on delivery'),
(2, 'bkash');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(30) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `product_limit` int(30) NOT NULL,
  `sub_cat_id` int(30) NOT NULL,
  `type_id` int(30) NOT NULL,
  `unit_id` int(30) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `product_details` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `p_name`, `price`, `product_limit`, `sub_cat_id`, `type_id`, `unit_id`, `image`, `product_details`) VALUES
(1, 'Teer_Soyaben_oil', 'Tk.490/=', 10, 1, 2, 1, 'uploads/teer_Soyaben_oil.jpg', 'Teer soyaben oil is true “The world healthiest” edible oil.\r\nIt contains Vitamins, antioxidants, nutrients, and trans-fat-free.\r\nIt is naturally cholesterol and trans-fat-free.\r\nIt helps to maintain the nervous system.'),
(2, 'Rupchanda_Soybean_oil', 'Tk.150/=', 5, 1, 2, 1, 'uploads/Rupchanda_Soybean_oil.jpg', 'Rupchanda soybean oil is true “The world healthiest” edible oil. It contains Vitamins, antioxidants, nutrients, and trans-fat-free. It is naturally cholesterol and trans-fat-free. It helps to maintain the nervous system.'),
(3, 'minicat_rice_1', 'Tk.60/=', 50, 1, 1, 8, 'uploads/minicat_rice_1.jpg', 'Minicat Rice'),
(4, 'ACI-Flour', 'Tk.40/=', 50, 1, 35, 8, 'uploads/ACI-Flour.jpg', 'ACI Pure Flour is using World famous European Technology “Ocrim Machine” for its production which is completely automated.ACI Pure takes extra care to keep things as natural as possible.It plays a vital role in strengthening immunity and extra protein to improve body strength.'),
(5, 'ACI Vacuum Salt', 'Tk.35/=', 10, 1, 5, 8, 'uploads/ACI Vacuum Salt.jpg', 'Iodine helps in the mental development of chilDren and prevents iodine deficiency disorders in adultsSea salt recommended by doctors and health professionals for its unique blend of trace minerals.Convenient for cooking,baking,and finishing.No artificial flavors,colors.'),
(6, 'H&S AD COOL MENTHOL SHAMPOO', 'Tk1,110/=', 50, 11, 51, 26, 'uploads/shampoo.jpg', '\r\nH&S AD COOL MENTHOL SHAMPOO 1000ML'),
(7, '\r\nSANDALINA WOOD SOAP', 'Tk.110/=', 50, 13, 47, 26, 'uploads/SANDALINA WOOD SOAP.jpg', 'SANDALINA WOOD SOAP 125g is made from natural sandalwood oil and moisturizing complex.It soften, smoothen and perfume your skin.It is made for specially take care of most delicate skin.'),
(8, 'Savlon Men Soap', 'Tk.50/=', 50, 13, 47, 0, 'uploads/Savlon Men Soap.jpg', 'Savlon Men Soao is a refreshing product for bath.It contains certain chemicals not found in plain soaps.It is more effective than regular soap and water for killing disease-causing germs'),
(9, 'Nido 1 plus', 'Tk.4,600/=', 10, 33, 14, 26, 'uploads/Nido 1 plus 1800g.jpg', 'NIDO 1+ starts with the goodness of milk.It alos includes vitamins, minerals, and prebiotics.It increses growth, development.Also builds a healthy immune system'),
(10, 'Meril Baby Lotion', 'Tk.230/=', 50, 32, 15, 12, 'uploads/lotion.jpg', 'When you are taking care of your child, the sweet fragrance and gentleness of Meril Baby Lotion will make the experience even more pleasant for both of you.While you will be giving your loving protection, your child would play with you, dabbing some lotion on your nose or cheek in return.As with other products in this line, Meril Baby Lotion is specially designed to meet the needs of Bangladeshi children, keeping our climate and environment in mind.'),
(11, 'HUGGIES DRY DIAPERS', 'Tk.1,536/=', 50, 30, 16, 26, 'uploads/HUGGIES DRY DIAPERS.jpg', 'Huggies® Diaper technology for dryness and breathability is clinically proven++ to help prevent diaper rash or dermatitis.Provides overnight protection^ with a super-absorbent gel which helps to absorb and lock fluid inside.Absorbs fluid quickly to help keep your baby’s skin dry.Allows air to escape 10x faster+ through outer cover so the baby’s skin '),
(12, 'Romania Lexus Vegetable Crackers', 'Tk.200/=', 50, 4, 17, 5, 'uploads/lexus.jpg', 'Romania Lexus Vegetable Crackers (240g) is available in buy 2 get 1 offer.It is a delicious crunchy biscuit.It has high amount of nutrition value.Its a vegetable flavour biscuit.'),
(13, 'Fresh Toilet Tissue Pink', 'Tk.16/=', 50, 13, 18, 26, 'uploads/Fresh Toilet Tissue Pink.jpg', 'Fresh Toilet Tissue Pink is a good quality product.This is 100% hygienic.Its water absorbent quality is super.It feels super soft. It is a pink colour toilet tissue.'),
(14, 'Coopers Brown Bread', 'Tk.125/=', 50, 4, 17, 26, 'uploads/bread.jpg', 'Brown Breads are high in fibre and other nutrients as compared to white bread since the flour is not processed much.The fibre present in brown bread can help reduce the risk of some chronic diseases like constipation etc.It also helps keep the blood sugar at lower levels, thus helping one to manage diabetes better.'),
(15, 'Fair & Lovely Adv Mv Hd Glow Cream', 'Tk.210/=', 50, 10, 18, 14, 'uploads/Fair & Lovely Adv Mv Hd Glow Cream.jpg', 'Fair & Lovely Advanced Multivitamin is a face cream with the hero ingredient of multivitamins, which are understood to work from within to give skin a blemish-free glow along with a smooth and soft texture.Women today want more skin quality led benefits like a radiant glow, skin that is free from blemishes and imperfections.While this new aspiration of skin, has visible radiance, it is also strongly associated with the quality of skin itself.'),
(16, 'Vaseline I Care A Soothe B Lotion', 'Tk.520/=', 50, 10, 18, 12, 'uploads/Vaseline I Care A Soothe B Lotion.jpg', 'Vaseline I Care Aloe Vera Soothe Body Lotion combines healing micro-droplets of Vaseline Jelly with Aloe Vera.Its ingredient Aloe Vera Soothes the skin.It has been clinically proven to moisturize deeply to soothe dry skin with the first application.'),
(17, 'Pepsodent Herbal Action Tooth Past', 'Tk.260/=', 50, 15, 18, 26, 'uploads/Pepsodent Herbal Action Tooth Past.jpg', 'Pepsodent Herbal Action Toothpaste made from natural ingredients.It prevents cavities and gives fresh breath.It is a formulation of herbal and lime.'),
(18, 'TRISA COOL & FRESH MEDIUM TOOTH BRUSH', 'Tk.255/=', 50, 15, 18, 26, 'uploads/TRISA COOL & FRESH MEDIUM TOOTH BRUSH.jpg', 'TRISA COOL & FRESH MEDIUM TOOTH BRUSH\'s whitening Filaments help to remove discolouration.It has ergonomical soft wave structure.It developed and produced in Switzerland.It has dual height cut.Colours of filaments harmonized with the colours of the handle.Trisa bristles are of special filament named Tynex which combines nylon(612) in a special formulation to deliver strength, stiffness, durability moisture resistance (even in a wet condition).'),
(19, 'Sharbat Rooh Afza', 'Tk.150/=', 15, 9, 10, 1, 'Sharbat Rooh Afza.jpg', 'Sharbat Rooh Afza (750ml) is a fruit-filled, friendly drink.It is a perfect treat on a hot day.It has been the countrys favorite drink for generations.'),
(20, 'Aarong Dairy Laban', 'Tk.30/=', 50, 9, 10, 12, 'uploads/Aarong Dairy Laban.jpg', 'Aarong Dairy Laban is a Aarong Dairy’s milk-based beverage.It is very tasty.It has high nutrition value.It adds a whole lot of goodness to every occasion.'),
(21, 'Boost Bib', 'Tk.290/=', 5, 9, 10, 5, 'uploads/Boost Bib.jpg', 'It\'s a high Protein Drink that provides complete and balanced nutrition with 20 g high-quality for muscle health plus 27 vitamins and minerals, including calcium and vitamin D.Help in the maintenance of optimal bone and muscle health for strength.It helps to release energy from food for efficient working of body cells which helps in optimal utilization of oxygen by the body important for stamina.'),
(22, 'Horlicks Bottle', 'Tk.500/=', 10, 9, 10, 26, 'uploads/Horlicks Bottle.jpg', 'Health Drink that has nutrients to support immunity.Clinically proven to improve 5 signs of growthClinically proven to make kids Taller, Stronger & SharperScientifically proven to improve Power of Milk'),
(23, 'Special Bashmoti rice', 'Tk.100/=', 50, 1, 1, 8, 'uploads/bashmoti.jpg', 'Special Bashmoti rice'),
(24, 'Chinigura rice', 'Tk.120/=', 50, 1, 1, 8, 'uploads/bashmoti.jpg', '\r\nChinigura rice'),
(25, 'Moshur daal', 'Tk.80/=', 30, 1, 4, 8, 'uploads/masoor-dal.jpg', 'Moshur daal'),
(26, 'Mashkolai daal', 'Tk.120/=', 25, 1, 4, 8, 'uploads/mashkolai_daal.jpg', 'Mashkolai daal'),
(27, 'Mug daal', 'Tk.80/=', 30, 1, 4, 8, 'uploads/mug_daal.jpg', 'Mug daal'),
(28, 'But daal', 'Tk.120/=', 25, 1, 4, 8, 'uploads/but_daal.jpg', 'But daal'),
(29, 'Elach', 'Tk.600/=', 30, 1, 3, 5, 'uploads/elach.jpg', 'Elach'),
(30, 'Daruchini', 'Tk.120/=', 50, 1, 3, 5, 'uploads/daruchini.jpg', 'Cinnamon contains large amounts of highly potent polyphenol antioxidants.The antioxidants in cinnamon have anti-inflammatory effects, which may help lower your risk of disease.Cinnamon may improve some key risk factors for heart disease, including cholesterol, triglycerides, and blood pressure.Cinnamon has been shown to significantly increase sensitivity to the hormone insulin.Animal and test-tube studies indicate that cinnamon may have protective effects against cancer.'),
(31, 'Beef', 'Tk.500/=', 30, 2, 6, 8, 'uploads/beef.jpg', 'Beef Provides a Large Source of L-CarnitineBones themselves are rich in vitamins and nutrients, including calcium, magnesium, and phosphorus.Beef Provides the “Master Antioxidant” Glutathione.Beef is High in Protein and Helps Improve Muscle MassBeef is Extremely Rich in MineralsEating Beef Helps Prevent Iron Deficiency AnemiaBeef Contains Carnosine, a Potent Amino Acid.'),
(32, 'Mutton', 'Tk.700/=', 100, 2, 6, 8, 'uploads/mutton.jpg', 'Reduces the risk of atherosclerosis and coronary heart disease.Good source of conjugated linoleic acid (CLA)- a fatty acid that may help prevent cancer and other inflammatory conditions.It contains Vitamin B, which helps you burn fat.It contains high amounts of lean proteins and low amounts of saturated fat, it helps control weight and reduces the risk of obesity.During pregnancy reduces the risk of birth defects in babies, such as neural tube defects, etc.It is rich in omega-3 fatty acids, goat meat is an effective treatment for autism.'),
(33, 'Chicken', 'Tk.300/=', 100, 2, 6, 8, 'uploads/chick.jpg', 'Chicken has a very high protein content, which plays a very important role in sustaining our muscles.Eating chicken regularly can help you healthily lose weight.Apart from protein, chicken is also chock full of calcium and phosphorus.It contains tryptophan and vitamin B5.Eating chicken in the form of soup is the best way to recover from most infections'),
(35, 'Rice cooker', 'Tk.2000/=', 10, 16, 21, 26, 'uploads/ricecooker.jpg', 'Simple electronic operation with automatic keep-warm.Seamless thicker outer body with aluminum food steamer.Easy-to-clean.Non-Stick double inner pot. A transparent glass lid keeps ingredients moist. Anti-bacterial warm mood. Integrated with a safety thermostat confirms better protection.'),
(36, 'Parachute Coconut Oil', 'Tk.300/=', 10, 14, 5, 5, 'uploads/Parachute Coconut Oil.jpg', 'Nothing but 100% pure coconut oil. Made with the finest hand-picked & naturally sun dried coconuts Untouched by hand- goes through 27 quality tests and 5 stage purification process – for 100% purity every time Unique tamper proof seal- the seal of trust. Long lasting freshness & nutty aroma Contains no added preservatives or chemicals.'),
(37, 'Revlon Colorsilk B Color Black ', 'Tk.370/=', 10, 14, 23, 12, 'uploads/Revlon Colorsilk B Color Black.jpg', 'Revlon Color silk Beautiful Color Black 10 is the ammonia-free hair color. It gives 100% coverage to the grey hairs. It is long-lasting, high-definition color and shine. It delivers rich, natural-looking, multi-tonal color from root to tip.'),
(38, 'Ruchi Premium Mix Chanachur', 'Tk.50/=', 10, 8, 17, 5, 'uploads/Ruchi Premium Mix Chanachur.jpg', 'Ruchi Premium Mix Chanachur (100g) is available in Buy 2 Get 1 Ruchi BBQ Chanachur Free offer. Ruchi Premium Mix Chanachur an authentic Bengali snack. It contains a mix of peanuts, flattened rice, mixed spices, and others. It has really a unique taste to invoke an amazing excitement and fondness.'),
(39, 'Papaya Ripe Thai Bulk', 'Tk.250/=', 50, 3, 24, 8, 'uploads/Papaya Ripe Thai Bulk.jpg', 'Papaya also known as Carica Papaya, it has an elongated shape with yellow-orange color that makes it juicy and so favorable. The ripe fruit can be eaten cooked and is used as an ingredient in salads and stews. Ripe papaya has a lot of health benefits as it helps cleanse the body internally of any toxins, eating ripe papaya daily helps with skin conditions like acne blemishes and pigmentation, may help in lowering blood sugar and ease digestion.'),
(40, 'Dates', 'Tk.600/=', 50, 3, 3, 8, 'uploads/Dates.jpg', 'Premium Maryam Dates - 500 g the fruit of the date palm tree.This is 100% organic and chemical free product. It is fully organic, imported from Iran and Saudi Arabia without any quality loss. It contains rich vitamins and minerals.Taste of Premium Maryam Dates - 500 g feels like enjoying a soft chocolate.'),
(41, 'PRAN HOT TOMATO SAUCE', 'Tk.350/=', 50, 6, 25, 8, 'uploads/PRAN HOT TOMATO SAUCE.jpg', '\r\nPRAN HOT TOMATO SAUCE 1KG'),
(42, 'Ruchi Chalta Pickle', 'Tk.130/=', 50, 6, 26, 5, 'uploads/Ruchi Chalta Pickle.jpg', 'The finest mangoes from the best plantations find their place inside the ruchi Chalta pickle jar. Processed with traditional seasoning and spices, Ruchi chalta pickle is the first choice for the mango pickle lovers. The aroma and the taste give Ruchi chalta pickle a different place among all the other branded pickles.'),
(43, 'Aarong Dairy Butter', 'Tk.185/=', 10, 7, 27, 5, 'uploads/Aarong Dairy Butter.jpg', 'Spread on Bread, Paratha, Roti, Nans, Sandwiches. Provides a significant proportion of the day’s total nutrient. Cooking Medium: Butter Paneer Masala, Butter Corn Masala and thousands of delightful recipes. The morning nourishing breakfast can give you a sense of resilience. Contains milk proteins. Full of nutrition.'),
(44, 'Aarong Sour Curd', 'Tk.80/=', 50, 7, 28, 12, 'uploads/Aarong Sour Curd.jpg', 'It is prepared through the process of bacterial fermentation of milk. Considered as the world\'s healthiest food because of its amazing health benefits. It is high in calcium and protein. It is beneficial for those who are lactose intolerant and cannot digest milk.\r\n'),
(45, 'Adidas Ice Dive Deo Roll On', 'Tk.120/=', 10, 12, 29, 12, 'uploads/Adidas Ice Dive Deo Roll On.jpg', 'Anti-Perspirant Deodorant Roll-On for Men 50ml. 48h protection. Fresh and ozonic fragrance. Notes of mint leaves, geranium, and musk. Dermatologically tested and 0% aluminum salts formula that respects skin pH'),
(46, 'Adidas Floral Dream Women Body Spray', 'Tk.150/=', 10, 12, 30, 12, 'uploads/Adidas Floral Dream Women Body Spray.jpg', 'Surround yourself with the gentle aroma of Adidas Flora Dream and flourish in its bouncy yet down-to-earth notes of rose and tonka bean. Ideal for women who desire refinement and freshness, this scent boasts a spicy bergamot top note that precedes bursts of savory vanilla and white lily, creating depth and an inner complexity. Adidas Floral Dream brings excitement to social or professional events without overpowering the noses of those around you'),
(47, 'Gillette Blue 3 Shaving Razor', 'Tk.50/=', 10, 13, 31, 26, 'uploads/Gillette Blue 3 Shaving Razor.jpg', '3 Independently mounted spring blades.A pivoting head that adjusts to the contours of your face for a smooth shave.Designed to offer a gentle shave for guys with sensitive skin.Pivoting head adjusts to the contours of your face.Soft ultra grip handle for high control'),
(48, 'Clariss Jasmine Air Freshener', 'Tk.130/=', 10, 19, 32, 12, 'uploads/Clariss Jasmine Air Freshener.jpg', 'Blunt Xtreme Ultimate Jasmine Type Clariss Air Freshener. 100% Ultra Concentrated Oil Based Spray. Ideal for Bathroom, Home, Car, Office & More.'),
(49, 'Aci Aerosol Insect Spray', 'Tk.450/=', 10, 20, 33, 12, 'uploads/Aci Aerosol Insect Spray.jpg', 'ACI Aerosol has been the number one choice of Insect Spray in Bangladesh. The effort to ensure the highest quality has helped ACI to be the most effective. To ensure world-class efficacy an. safety for humans, chemicals are acquired from a world-renowned Japanese company.'),
(50, 'Boroline Cream', 'Tk.100/=', 50, 26, 34, 5, 'uploads/Boroline Cream.jpg', 'Antiseptic Ayurvedic Cream. Heals cracked heels, sunburns, scars & Protects against rashes. Softens rough hands and elbows as well as Prevents skin infection from spreading. Protects the affected skin against germs and facilitates the rapid growth of epidermal cells.'),
(51, 'Mukta Roy', '$21.00', 5, 20, 24, 1, 'uploads/ACI Vacuum Salt.jpg', 'Women Fashion'),
(52, 'Saree', '21.00', 5, 36, 36, 27, 'uploads/129082568_2733690560228426_3557128798573170900_o.jpg', 'Women\'s Fashion'),
(53, '$name', '$price', 0, 0, 0, 0, 'uploads/$image', '$details'),
(56, 'Tasnim Khandokar', '21.00', 5, 19, 20, 5, 'uploads/133441002_838743466950246_3918974105572982881_o.jpg', 'Women\'s Fashion'),
(57, 'Salman Akter', '21.00', 5, 19, 20, 5, 'uploads/133441002_838743466950246_3918974105572982881_o.jpg', 'Women\'s Fashion'),
(58, 'asdfghjk,', '21.00', 5, 20, 24, 5, '51729463_827539384304934_5172384494157561856_o.png', 'Womens Fashion'),
(59, 'Tasnim Khandokar', '$21.00', 15, 19, 21, 1, '59655728_2102314543156783_5590255116654477312_o (1).jpg', 'Womens Fashion'),
(61, 'Saree3', '$29.00', 5, 19, 24, 0, '65213880_2179711848750385_4083680554581491712_n.jpg', 'Womens Fashion'),
(63, 'Suit', 'Tk.1550/=', 20, 36, 36, 27, '129850958_2733690443561771_7547181352691706537_o.jpg', 'Womens Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `rating` int(20) NOT NULL,
  `published` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(30) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `sub_cat_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `s_name`, `status`, `cat_id`, `sub_cat_img`) VALUES
(1, 'cooking essentials', '1', 1, 'uploads/sub_cat_img_1.jpg'),
(2, 'meat & fish', '1', 1, 'uploads/mutton.jpg'),
(3, 'fruits & vegetables', '1', 1, 'uploads/sub_cat_img_3.jpg'),
(4, 'breads, biscuits & cakes', '1', 1, 'uploads/sub_cat_img_4.jpg'),
(5, 'spreads', '1', 1, 'uploads/sub_cat_img_5.jpg'),
(6, 'sauces & pickles', '1', 1, 'uploads/sauces & pickles.jpg'),
(7, 'milk & dairy products', '1', 1, 'uploads/milk & dairy products.jpg'),
(8, 'snacks & instant foods', '1', 1, 'uploads/snacks & instant foods.jpg'),
(9, 'drinks', '1', 1, 'uploads/drinks.jpg'),
(10, 'skin care', '1', 2, 'uploads/skin care.jpg'),
(11, 'hair care', '1', 2, 'uploads/hair care.jpg'),
(12, 'fragrance', '1', 2, 'uploads/fragrance.jpg'),
(13, 'bath & body care', '1', 3, 'uploads/bath & body care.jpg'),
(14, 'hair care', '1', 3, 'uploads/hair care.jpg'),
(15, 'oral care', '1', 3, 'uploads/oral care.jpg'),
(16, 'cookware', '1', 4, 'uploads/cookware.jpg'),
(17, 'electronic items', '1', 4, 'uploads/electronic items.jpg'),
(18, 'spoon, forks & others', '1', 4, 'uploads/spoon, forks & others.jpg'),
(19, 'air freshner', '1', 4, 'uploads/air freshner.jpg'),
(20, 'mosquito aerosol', '1', 4, 'uploads/mosquito aerosol.jpg'),
(21, 'umbrella', '1', 4, 'uploads/umbrella.jpg'),
(22, 'paddle bin', '1', 4, 'uploads/paddle bin.jpg'),
(23, 'blanket & comforter', '1', 4, 'uploads/blanket & comforter.jpg'),
(24, 'towels', '1', 4, 'uploads/towels.jpg'),
(25, 'toiletries', '1', 4, 'uploads/toiletries.jpg'),
(26, 'first aid', '1', 5, 'uploads/first aid.jpg'),
(27, 'family planning', '1', 5, 'uploads/family planning.jpg'),
(28, 'antiseptic', '1', 5, 'uploads/antiseptic.jpg'),
(29, 'sanitizer', '1', 5, 'uploads/sanitizer.jpg'),
(30, 'baby diapers', '1', 6, 'uploads/baby diapers.jpg'),
(31, 'baby wipes', '1', 6, 'uploads/baby wipes.jpg'),
(32, 'baby accessories', '1', 6, 'uploads/baby accessories.jpg'),
(33, 'baby food', '1', 6, 'uploads/baby food.jpg'),
(34, 'special offers', '1', 7, 'uploads/'),
(35, 'education', '1', 7, 'uploads/'),
(36, 'fashion & life styles', '1', 7, '129850958_2733690443561771_7547181352691706537_o.jpg'),
(37, 'pet care', '1', 7, '82069079_2788030574593822_5973672241647321088_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `t_name` varchar(100) DEFAULT NULL,
  `sub_cat_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `t_name`, `sub_cat_id`) VALUES
(1, 'rice', 1),
(3, 'spices and mixes', 1),
(4, 'daal', 1),
(5, 'oil', 1),
(6, 'meat', 2),
(7, 'fish', 2),
(8, 'Dry fruits', 3),
(10, 'Soft drinks', 9),
(11, 'green leaf', 3),
(12, 'Yellow vegetables', 3),
(13, 'Sea fish', 2),
(14, 'baby food', 33),
(15, 'baby accessories', 32),
(16, 'baby diapers', 30),
(17, 'breads, biscuits & cakes', 4),
(18, 'bath & body care', 13),
(19, 'Lotion', 10),
(20, 'Shower gell', 10),
(21, 'Electric cooker', 16),
(23, 'hair color', 14),
(24, 'Fruits', 3),
(25, 'sauces ', 6),
(26, 'pickles', 6),
(27, 'Butter', 7),
(28, 'Curd', 7),
(29, ' Deo', 12),
(30, 'Women Body Spray', 12),
(31, 'Shaving Razor', 13),
(32, 'room freshener', 19),
(33, 'Insect Spray', 20),
(34, 'antiseptic', 26),
(35, 'flour', 1),
(36, 'saree', 36);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(30) NOT NULL,
  `u_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `u_name`) VALUES
(1, 'liter'),
(5, 'gm'),
(8, 'kg'),
(12, 'ml'),
(26, 'EA'),
(27, 'piece');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_fk` (`customer_id`),
  ADD KEY `payment` (`payment_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `orders` (`order_id`),
  ADD KEY `product_fk` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `sub_category` (`sub_cat_id`),
  ADD KEY `type` (`type_id`),
  ADD KEY `unit` (`unit_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product` (`product_id`),
  ADD KEY `customer` (`customer_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `category` (`cat_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `type_id` (`sub_cat_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`sub_cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
