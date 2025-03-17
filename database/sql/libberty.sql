-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 11:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libberty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', 'superadmin', NULL, '$2y$10$u/VwNMhuvk7JjzI0AQq3JeRwdTqQR9HJ0lxm5iX8I1Slxz4q.VsFm', NULL, '2024-11-13 03:32:55', '2024-11-13 03:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `type` enum('anantaa','regent','banjara','blog') NOT NULL DEFAULT 'anantaa',
  `desc` varchar(256) NOT NULL,
  `image` varchar(250) NOT NULL,
  `is_popup` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `heading`, `type`, `desc`, `image`, `is_popup`, `status`, `created_at`, `updated_at`) VALUES
(2, 'regent-hall', 'regent-hall', 'regent', 'Weddings, Receptions, Parties, Corporates and More ', '1741159755.jpg', 0, 1, '2025-03-05 01:59:15', '2025-03-05 01:59:15'),
(3, 'anantaa-hall', 'anantaa-hall', 'anantaa', 'Weddings, Receptions, Parties, Corporates and More', '1741159788.jpg', 0, 1, '2025-03-05 01:59:48', '2025-03-05 01:59:48'),
(4, 'banjara-hall', 'banjara-hall', 'banjara', 'Weddings, Receptions, Parties, Corporates and More', '1741159818.jpg', 0, 1, '2025-03-05 02:00:18', '2025-03-05 03:15:49'),
(5, 'Blog', 'Blog', 'blog', 'how off your uniqueness with a blog banner design that speaks to you', '1741170721.webp', 0, 1, '2025-03-05 04:44:54', '2025-03-05 05:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT 1,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `is_featured` enum('1','0') NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `blog_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `image`, `description`, `author`, `is_featured`, `status`, `blog_date`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Dolorum optio tempore voluptas dignissimos Large Blog', '1741171081.webp', '<p><strong>The landscape of web development continues to evolve at an unprecedented pace, bringing new technologies, frameworks, and methodologies that reshape how we build modern web applications.</strong></p>\r\n\r\n<p>As we delve into 2025, the web development ecosystem has transformed dramatically, introducing innovative approaches to building faster, more secure, and highly engaging web experiences. This comprehensive guide explores the latest trends and best practices that are defining the future of web development.</p>\r\n\r\n<p>Modern development environments emphasize collaboration and efficiency</p>\r\n\r\n<h2>The Rise of Web Components</h2>\r\n\r\n<p>Web Components have become increasingly crucial in modern web development, offering a standardized way to create reusable custom elements. Key advantages include:</p>\r\n\r\n<ul>\r\n	<li>Enhanced code reusability across different frameworks</li>\r\n	<li>Better encapsulation of functionality</li>\r\n	<li>Improved maintenance and scalability</li>\r\n	<li>Framework-agnostic component development</li>\r\n</ul>\r\n\r\n<h3>Key Trends in 2025</h3>\r\n\r\n<ul>\r\n	<li>Edge Computing and Serverless Architecture</li>\r\n	<li>Enhanced Security Measures</li>\r\n	<li>Progressive Web Apps (PWAs)</li>\r\n</ul>\r\n\r\n<h2>Performance Optimization</h2>\r\n\r\n<p>Performance remains a critical factor in web development, with an increasing focus on Core Web Vitals and user experience metrics. Modern applications must be optimized for both speed and efficiency.</p>\r\n\r\n<blockquote>\r\n<p>&quot;The future of web development lies not just in writing code, but in creating seamless, accessible, and performant experiences that work for everyone, everywhere.&quot;</p>\r\n<cite>Emily Thompson, Web Performance Architect</cite></blockquote>\r\n\r\n<p>Performance Metrics</p>\r\n\r\n<p>Focus on Core Web Vitals and user-centric performance metrics for better search rankings and user experience.</p>\r\n\r\n<p>Accessibility</p>\r\n\r\n<p>Implementing WCAG guidelines and ensuring web applications are accessible to all users across different devices.</p>\r\n\r\n<h2>Looking Forward</h2>\r\n\r\n<p>As we continue through 2025, web development practices will further evolve, embracing new technologies while maintaining a strong foundation in performance, accessibility, and user experience. Staying updated with these trends and best practices is crucial for developers looking to build modern, scalable web applications.</p>', 'Sam', '0', 1, '2025-03-01', '2025-03-05 05:08:01', '2025-03-05 05:08:01'),
(2, NULL, 'Dolorum optio tempore voluptas dignissimos small Blog beside', '1741241124.webp', '<p><strong>The landscape of web development continues to evolve at an unprecedented pace, bringing new technologies, frameworks, and methodologies that reshape how we build modern web applications.</strong></p>\r\n\r\n<p>As we delve into 2025, the web development ecosystem has transformed dramatically, introducing innovative approaches to building faster, more secure, and highly engaging web experiences. This comprehensive guide explores the latest trends and best practices that are defining the future of web development.</p>\r\n\r\n<p>Modern development environments emphasize collaboration and efficiency</p>\r\n\r\n<h2>The Rise of Web Components</h2>\r\n\r\n<p>Web Components have become increasingly crucial in modern web development, offering a standardized way to create reusable custom elements. Key advantages include:</p>\r\n\r\n<ul>\r\n	<li>Enhanced code reusability across different frameworks</li>\r\n	<li>Better encapsulation of functionality</li>\r\n	<li>Improved maintenance and scalability</li>\r\n	<li>Framework-agnostic component development</li>\r\n</ul>\r\n\r\n<h3>Key Trends in 2025</h3>\r\n\r\n<ul>\r\n	<li>Edge Computing and Serverless Architecture</li>\r\n	<li>Enhanced Security Measures</li>\r\n	<li>Progressive Web Apps (PWAs)</li>\r\n</ul>\r\n\r\n<h2>Performance Optimization</h2>\r\n\r\n<p>Performance remains a critical factor in web development, with an increasing focus on Core Web Vitals and user experience metrics. Modern applications must be optimized for both speed and efficiency.</p>\r\n\r\n<blockquote>\r\n<p>&quot;The future of web development lies not just in writing code, but in creating seamless, accessible, and performant experiences that work for everyone, everywhere.&quot;</p>\r\n<cite>Emily Thompson, Web Performance Architect</cite></blockquote>\r\n\r\n<p>Performance Metrics</p>\r\n\r\n<p>Focus on Core Web Vitals and user-centric performance metrics for better search rankings and user experience.</p>\r\n\r\n<p>Accessibility</p>\r\n\r\n<p>Implementing WCAG guidelines and ensuring web applications are accessible to all users across different devices.</p>\r\n\r\n<h2>Looking Forward</h2>\r\n\r\n<p>As we continue through 2025, web development practices will further evolve, embracing new technologies while maintaining a strong foundation in performance, accessibility, and user experience. Staying updated with these trends and best practices is crucial for developers looking to build modern, scalable web applications.</p>', 'Rakesh', '0', 1, '2025-03-01', '2025-03-05 05:08:01', '2025-03-06 00:35:24'),
(3, NULL, 'Dolorum optio tempore voluptas dignissimos One', '1741241158.webp', '<p><strong>The landscape of web development continues to evolve at an unprecedented pace, bringing new technologies, frameworks, and methodologies that reshape how we build modern web applications.</strong></p>\r\n\r\n<p>As we delve into 2025, the web development ecosystem has transformed dramatically, introducing innovative approaches to building faster, more secure, and highly engaging web experiences. This comprehensive guide explores the latest trends and best practices that are defining the future of web development.</p>\r\n\r\n<p>Modern development environments emphasize collaboration and efficiency</p>\r\n\r\n<h2>The Rise of Web Components</h2>\r\n\r\n<p>Web Components have become increasingly crucial in modern web development, offering a standardized way to create reusable custom elements. Key advantages include:</p>\r\n\r\n<ul>\r\n	<li>Enhanced code reusability across different frameworks</li>\r\n	<li>Better encapsulation of functionality</li>\r\n	<li>Improved maintenance and scalability</li>\r\n	<li>Framework-agnostic component development</li>\r\n</ul>\r\n\r\n<h3>Key Trends in 2025</h3>\r\n\r\n<ul>\r\n	<li>Edge Computing and Serverless Architecture</li>\r\n	<li>Enhanced Security Measures</li>\r\n	<li>Progressive Web Apps (PWAs)</li>\r\n</ul>\r\n\r\n<h2>Performance Optimization</h2>\r\n\r\n<p>Performance remains a critical factor in web development, with an increasing focus on Core Web Vitals and user experience metrics. Modern applications must be optimized for both speed and efficiency.</p>\r\n\r\n<blockquote>\r\n<p>&quot;The future of web development lies not just in writing code, but in creating seamless, accessible, and performant experiences that work for everyone, everywhere.&quot;</p>\r\n<cite>Emily Thompson, Web Performance Architect</cite></blockquote>\r\n\r\n<p>Performance Metrics</p>\r\n\r\n<p>Focus on Core Web Vitals and user-centric performance metrics for better search rankings and user experience.</p>\r\n\r\n<p>Accessibility</p>\r\n\r\n<p>Implementing WCAG guidelines and ensuring web applications are accessible to all users across different devices.</p>\r\n\r\n<h2>Looking Forward</h2>\r\n\r\n<p>As we continue through 2025, web development practices will further evolve, embracing new technologies while maintaining a strong foundation in performance, accessibility, and user experience. Staying updated with these trends and best practices is crucial for developers looking to build modern, scalable web applications.</p>', 'Rahul', '0', 1, '2025-03-01', '2025-03-05 05:08:01', '2025-03-06 00:35:58'),
(4, NULL, 'Dolorum optio tempore voluptas dignissimos Two', '1741241181.webp', '<p><strong>The landscape of web development continues to evolve at an unprecedented pace, bringing new technologies, frameworks, and methodologies that reshape how we build modern web applications.</strong></p>\r\n\r\n<p>As we delve into 2025, the web development ecosystem has transformed dramatically, introducing innovative approaches to building faster, more secure, and highly engaging web experiences. This comprehensive guide explores the latest trends and best practices that are defining the future of web development.</p>\r\n\r\n<p>Modern development environments emphasize collaboration and efficiency</p>\r\n\r\n<h2>The Rise of Web Components</h2>\r\n\r\n<p>Web Components have become increasingly crucial in modern web development, offering a standardized way to create reusable custom elements. Key advantages include:</p>\r\n\r\n<ul>\r\n	<li>Enhanced code reusability across different frameworks</li>\r\n	<li>Better encapsulation of functionality</li>\r\n	<li>Improved maintenance and scalability</li>\r\n	<li>Framework-agnostic component development</li>\r\n</ul>\r\n\r\n<h3>Key Trends in 2025</h3>\r\n\r\n<ul>\r\n	<li>Edge Computing and Serverless Architecture</li>\r\n	<li>Enhanced Security Measures</li>\r\n	<li>Progressive Web Apps (PWAs)</li>\r\n</ul>\r\n\r\n<h2>Performance Optimization</h2>\r\n\r\n<p>Performance remains a critical factor in web development, with an increasing focus on Core Web Vitals and user experience metrics. Modern applications must be optimized for both speed and efficiency.</p>\r\n\r\n<blockquote>\r\n<p>&quot;The future of web development lies not just in writing code, but in creating seamless, accessible, and performant experiences that work for everyone, everywhere.&quot;</p>\r\n<cite>Emily Thompson, Web Performance Architect</cite></blockquote>\r\n\r\n<p>Performance Metrics</p>\r\n\r\n<p>Focus on Core Web Vitals and user-centric performance metrics for better search rankings and user experience.</p>\r\n\r\n<p>Accessibility</p>\r\n\r\n<p>Implementing WCAG guidelines and ensuring web applications are accessible to all users across different devices.</p>\r\n\r\n<h2>Looking Forward</h2>\r\n\r\n<p>As we continue through 2025, web development practices will further evolve, embracing new technologies while maintaining a strong foundation in performance, accessibility, and user experience. Staying updated with these trends and best practices is crucial for developers looking to build modern, scalable web applications.</p>', 'Neesha', '0', 1, '2025-03-01', '2025-03-05 05:08:01', '2025-03-06 00:36:21'),
(5, NULL, 'Dolorum optio tempore voluptas dignissimos Three', '1741241207.webp', '<p><strong>The landscape of web development continues to evolve at an unprecedented pace, bringing new technologies, frameworks, and methodologies that reshape how we build modern web applications.</strong></p>\r\n\r\n<p>As we delve into 2025, the web development ecosystem has transformed dramatically, introducing innovative approaches to building faster, more secure, and highly engaging web experiences. This comprehensive guide explores the latest trends and best practices that are defining the future of web development.</p>\r\n\r\n<p>Modern development environments emphasize collaboration and efficiency</p>\r\n\r\n<h2>The Rise of Web Components</h2>\r\n\r\n<p>Web Components have become increasingly crucial in modern web development, offering a standardized way to create reusable custom elements. Key advantages include:</p>\r\n\r\n<ul>\r\n	<li>Enhanced code reusability across different frameworks</li>\r\n	<li>Better encapsulation of functionality</li>\r\n	<li>Improved maintenance and scalability</li>\r\n	<li>Framework-agnostic component development</li>\r\n</ul>\r\n\r\n<h3>Key Trends in 2025</h3>\r\n\r\n<ul>\r\n	<li>Edge Computing and Serverless Architecture</li>\r\n	<li>Enhanced Security Measures</li>\r\n	<li>Progressive Web Apps (PWAs)</li>\r\n</ul>\r\n\r\n<h2>Performance Optimization</h2>\r\n\r\n<p>Performance remains a critical factor in web development, with an increasing focus on Core Web Vitals and user experience metrics. Modern applications must be optimized for both speed and efficiency.</p>\r\n\r\n<blockquote>\r\n<p>&quot;The future of web development lies not just in writing code, but in creating seamless, accessible, and performant experiences that work for everyone, everywhere.&quot;</p>\r\n<cite>Emily Thompson, Web Performance Architect</cite></blockquote>\r\n\r\n<p>Performance Metrics</p>\r\n\r\n<p>Focus on Core Web Vitals and user-centric performance metrics for better search rankings and user experience.</p>\r\n\r\n<p>Accessibility</p>\r\n\r\n<p>Implementing WCAG guidelines and ensuring web applications are accessible to all users across different devices.</p>\r\n\r\n<h2>Looking Forward</h2>\r\n\r\n<p>As we continue through 2025, web development practices will further evolve, embracing new technologies while maintaining a strong foundation in performance, accessibility, and user experience. Staying updated with these trends and best practices is crucial for developers looking to build modern, scalable web applications.</p>', 'Pinkesh', '0', 1, '2025-03-01', '2025-03-05 05:08:01', '2025-03-06 00:36:47'),
(6, NULL, 'At vero eos et accusamus et iusto odio dignissimos ducimus', '1741240208.webp', '<p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.</p>\r\n\r\n<h3><strong>The Future of Technology: Innovations Shaping Our World</strong></h3>\r\n\r\n<p>Technology is evolving at an unprecedented pace, revolutionizing the way we live, work, and communicate. From artificial intelligence to quantum computing, the digital landscape is undergoing a transformation that will redefine the future.</p>\r\n\r\n<p><strong>1. Artificial Intelligence &amp; Automation</strong><br />\r\nAI is no longer just a concept from science fiction; it is now deeply integrated into our daily lives. From voice assistants like Siri and Alexa to self-driving cars, AI is making processes more efficient and intelligent. Businesses are leveraging automation to streamline operations, reducing costs and enhancing productivity.</p>\r\n\r\n<p><strong>2. Quantum Computing: A New Era of Computing</strong><br />\r\nQuantum computers have the potential to solve complex problems at speeds unimaginable with traditional computers. Companies like Google and IBM are making significant strides in this field, opening doors for breakthroughs in medicine, cryptography, and scientific research.</p>\r\n\r\n<p><strong>3. The Rise of Sustainable Technology</strong><br />\r\nWith climate change being a major concern, sustainable tech innovations are gaining momentum. Solar energy, electric vehicles, and biodegradable materials are becoming more mainstream, promoting a greener future.</p>', 'Mark Wilson', '1', 1, '2025-03-05', '2025-03-06 00:20:08', '2025-03-06 00:28:43'),
(7, NULL, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet', '1741240254.webp', '<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>\r\n\r\n<h3><strong>The Future of Technology: Innovations Shaping Our World</strong></h3>\r\n\r\n<p>Technology is evolving at an unprecedented pace, revolutionizing the way we live, work, and communicate. From artificial intelligence to quantum computing, the digital landscape is undergoing a transformation that will redefine the future.</p>\r\n\r\n<p><strong>1. Artificial Intelligence &amp; Automation</strong><br />\r\nAI is no longer just a concept from science fiction; it is now deeply integrated into our daily lives. From voice assistants like Siri and Alexa to self-driving cars, AI is making processes more efficient and intelligent. Businesses are leveraging automation to streamline operations, reducing costs and enhancing productivity.</p>\r\n\r\n<p><strong>2. Quantum Computing: A New Era of Computing</strong><br />\r\nQuantum computers have the potential to solve complex problems at speeds unimaginable with traditional computers. Companies like Google and IBM are making significant strides in this field, opening doors for breakthroughs in medicine, cryptography, and scientific research.</p>\r\n\r\n<p><strong>3. The Rise of Sustainable Technology</strong><br />\r\nWith climate change being a major concern, sustainable tech innovations are gaining momentum. Solar energy, electric vehicles, and biodegradable materials are becoming more mainstream, promoting a greener future.</p>\r\n\r\n<p><strong>4. 5G &amp; the Internet of Things (IoT)</strong><br />\r\nThe deployment of 5G networks is set to revolutionize connectivity, enabling ultra-fast internet speeds and enhancing IoT devices. Smart homes, wearable health devices, and connected cities are all part of this digital evolution.</p>\r\n\r\n<p><strong>5. The Metaverse &amp; Virtual Reality</strong><br />\r\nThe concept of the metaverse is taking shape, with companies investing in immersive virtual worlds. From gaming to business meetings, VR and AR are blurring the lines between reality and the digital realm.</p>', 'Mark Wilson', '1', 1, '2025-03-11', '2025-03-06 00:20:54', '2025-03-06 00:29:00'),
(8, NULL, 'Et harum quidem rerum facilis est et expedita distinctio', '1741240291.webp', '<p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>The Future of Technology: Innovations Shaping Our World</strong></h3>\r\n\r\n<p>Technology is evolving at an unprecedented pace, revolutionizing the way we live, work, and communicate. From artificial intelligence to quantum computing, the digital landscape is undergoing a transformation that will redefine the future.</p>\r\n\r\n<p><strong>1. Artificial Intelligence &amp; Automation</strong><br />\r\nAI is no longer just a concept from science fiction; it is now deeply integrated into our daily lives. From voice assistants like Siri and Alexa to self-driving cars, AI is making processes more efficient and intelligent. Businesses are leveraging automation to streamline operations, reducing costs and enhancing productivity.</p>\r\n\r\n<p><strong>2. Quantum Computing: A New Era of Computing</strong><br />\r\nQuantum computers have the potential to solve complex problems at speeds unimaginable with traditional computers. Companies like Google and IBM are making significant strides in this field, opening doors for breakthroughs in medicine, cryptography, and scientific research.</p>\r\n\r\n<p><strong>3. The Rise of Sustainable Technology</strong><br />\r\nWith climate change being a major concern, sustainable tech innovations are gaining momentum. Solar energy, electric vehicles, and biodegradable materials are becoming more mainstream, promoting a greener future.</p>\r\n\r\n<p><strong>4. 5G &amp; the Internet of Things (IoT)</strong><br />\r\nThe deployment of 5G networks is set to revolutionize connectivity, enabling ultra-fast internet speeds and enhancing IoT devices. Smart homes, wearable health devices, and connected cities are all part of this digital evolution.</p>\r\n\r\n<p><strong>5. The Metaverse &amp; Virtual Reality</strong><br />\r\nThe concept of the metaverse is taking shape, with companies investing in immersive virtual worlds. From gaming to business meetings, VR and AR are blurring the lines between reality and the digital realm.</p>', 'Emma Davis', '1', 1, '2025-02-20', '2025-03-06 00:21:31', '2025-03-06 00:29:11'),
(9, NULL, 'At vero eos et accusamus et iusto odio dignissimos ducimus', '1741240329.webp', '<p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>The Future of Technology: Innovations Shaping Our World</strong></h3>\r\n\r\n<p>Technology is evolving at an unprecedented pace, revolutionizing the way we live, work, and communicate. From artificial intelligence to quantum computing, the digital landscape is undergoing a transformation that will redefine the future.</p>\r\n\r\n<p><strong>1. Artificial Intelligence &amp; Automation</strong><br />\r\nAI is no longer just a concept from science fiction; it is now deeply integrated into our daily lives. From voice assistants like Siri and Alexa to self-driving cars, AI is making processes more efficient and intelligent. Businesses are leveraging automation to streamline operations, reducing costs and enhancing productivity.</p>\r\n\r\n<p><strong>2. Quantum Computing: A New Era of Computing</strong><br />\r\nQuantum computers have the potential to solve complex problems at speeds unimaginable with traditional computers. Companies like Google and IBM are making significant strides in this field, opening doors for breakthroughs in medicine, cryptography, and scientific research.</p>\r\n\r\n<p><strong>3. The Rise of Sustainable Technology</strong><br />\r\nWith climate change being a major concern, sustainable tech innovations are gaining momentum. Solar energy, electric vehicles, and biodegradable materials are becoming more mainstream, promoting a greener future.</p>\r\n\r\n<p><strong>4. 5G &amp; the Internet of Things (IoT)</strong><br />\r\nThe deployment of 5G networks is set to revolutionize connectivity, enabling ultra-fast internet speeds and enhancing IoT devices. Smart homes, wearable health devices, and connected cities are all part of this digital evolution.</p>\r\n\r\n<p><strong>5. The Metaverse &amp; Virtual Reality</strong><br />\r\nThe concept of the metaverse is taking shape, with companies investing in immersive virtual worlds. From gaming to business meetings, VR and AR are blurring the lines between reality and the digital realm.</p>', 'Sarah Johnson', '1', 1, '2025-03-01', '2025-03-06 00:22:09', '2025-03-06 00:29:21'),
(10, NULL, 'Et harum quidem rerum facilis est et expedita distinctio', '1741240362.webp', '<p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>The Future of Technology: Innovations Shaping Our World</strong></h3>\r\n\r\n<p>Technology is evolving at an unprecedented pace, revolutionizing the way we live, work, and communicate. From artificial intelligence to quantum computing, the digital landscape is undergoing a transformation that will redefine the future.</p>\r\n\r\n<p><strong>1. Artificial Intelligence &amp; Automation</strong><br />\r\nAI is no longer just a concept from science fiction; it is now deeply integrated into our daily lives. From voice assistants like Siri and Alexa to self-driving cars, AI is making processes more efficient and intelligent. Businesses are leveraging automation to streamline operations, reducing costs and enhancing productivity.</p>\r\n\r\n<p><strong>2. Quantum Computing: A New Era of Computing</strong><br />\r\nQuantum computers have the potential to solve complex problems at speeds unimaginable with traditional computers. Companies like Google and IBM are making significant strides in this field, opening doors for breakthroughs in medicine, cryptography, and scientific research.</p>\r\n\r\n<p><strong>3. The Rise of Sustainable Technology</strong><br />\r\nWith climate change being a major concern, sustainable tech innovations are gaining momentum. Solar energy, electric vehicles, and biodegradable materials are becoming more mainstream, promoting a greener future.</p>\r\n\r\n<p><strong>4. 5G &amp; the Internet of Things (IoT)</strong><br />\r\nThe deployment of 5G networks is set to revolutionize connectivity, enabling ultra-fast internet speeds and enhancing IoT devices. Smart homes, wearable health devices, and connected cities are all part of this digital evolution.</p>\r\n\r\n<p><strong>5. The Metaverse &amp; Virtual Reality</strong><br />\r\nThe concept of the metaverse is taking shape, with companies investing in immersive virtual worlds. From gaming to business meetings, VR and AR are blurring the lines between reality and the digital realm.</p>', 'David Brown', '1', 1, '2025-03-02', '2025-03-06 00:22:42', '2025-03-06 00:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`) VALUES
(1, 'Jewellery'),
(2, 'Business'),
(3, 'Sessions'),
(4, 'Seminar'),
(5, 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `type` enum('anantaa','regent','banjara') NOT NULL DEFAULT 'anantaa',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page_name`, `description`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ANANTAA HALL PACKAGES', '<div class=\"container\">\r\n            <h2 class=\"text-center mb-3\">ANANTAA HALL PACKAGES</h2>\r\n            <div class=\"col-lg-8 offset-lg-2 pcktable\">\r\n                <div class=\"table-responsive\">\r\n                    <table class=\"table table-striped table-hover mb-0\">\r\n                        <thead class=\"table-warning\">\r\n                            <tr>\r\n                                <th scope=\"col\">#</th>\r\n                                <th scope=\"col\">PACKAGES</th>\r\n                                <th scope=\"col\"><strong>AMRIT</strong><br> @1400/-</th>\r\n                                <th scope=\"col\"><strong>AAHAR</strong><br> @1600/-</th>\r\n                                <th scope=\"col\"><strong>PANCH RASA</strong><br> @1900/-</th>\r\n                            </tr>\r\n                        </thead>\r\n                        <tbody>\r\n                            <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>JUICE</td>\r\n                                <td>3</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>SEASONAL JUICE</td>\r\n                                <td>-</td>\r\n                                <td>1</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n\r\n                            <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>STARTERS</td>\r\n                                <td>3</td>\r\n                                <td>4</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>PREMIUM STARTERS</td>\r\n                                <td>-</td>\r\n                                <td>-</td>\r\n                                <td>1</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>SOUP</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>CHAAT</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>4</td>\r\n                            </tr>\r\n\r\n                            <tr>\r\n                                <th scope=\"row\">7</th>\r\n                                <td>SALAD</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">8</th>\r\n                                <td>LIVE INTERNATIONAL</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">9</th>\r\n                                <td>PREMIUM LIVE INTERNATIONAL</td>\r\n                                <td>-</td>\r\n                                <td>-</td>\r\n                                <td>1</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">10</th>\r\n                                <td>ORIENTAL &amp; CONTINENTAL</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">11</th>\r\n                                <td>INDIAN</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">12</th>\r\n                                <td>LIVE INDIAN</td>\r\n                                <td>-</td>\r\n                                <td>1</td>\r\n                                <td>1</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">13</th>\r\n                                <td>BREADS</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                                <td>4</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">14</th>\r\n                                <td>RICE </td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">15</th>\r\n                                <td>LENTILS</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">16</th>\r\n                                <td>ACCOMPANIMENTS</td>\r\n                                <td colspan=\"3\">Assorted Papad | Pickles | Curd</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">17</th>\r\n                                <td>PREMIUM DESSERTS</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>4</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">18</th>\r\n                                <td>LIVE DESSERTS</td>\r\n                                <td>1</td>\r\n                                <td>1</td>\r\n                                <td>1</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">19</th>\r\n                                <td>ICE CREAM</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>-</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">20</th>\r\n                                <td>STONE CONCEPTS</td>\r\n                                <td>-</td>\r\n                                <td>-</td>\r\n                                <td>COUNTER</td>\r\n                            </tr>\r\n                        </tbody>\r\n                    </table>\r\n                </div>\r\n                <div class=\"text-center table-active text-white py-2\"></div>\r\n            </div>\r\n        </div>', 'anantaa', 1, '2025-03-17 00:49:05', '2025-03-17 00:54:12'),
(2, 'REGENT HALL PACKAGES', '<h2 class=\"text-center mb-3\">REGENT HALL PACKAGES</h2>\r\n            <div class=\"col-lg-8 offset-lg-2 pcktable\">\r\n                <div class=\"table-responsive\">\r\n                    <table class=\"table table-striped table-hover mb-0\">\r\n                        <thead class=\"table-warning\">\r\n                            <tr>\r\n                                <th scope=\"col\">#</th>\r\n                                <th scope=\"col\">PACKAGES</th>\r\n                                <th scope=\"col\"><strong>GRAND</strong><br> @1050/-</th>\r\n                                <th scope=\"col\"><strong>ROYAL</strong><br> @1250/-</th>\r\n                                <th scope=\"col\"><strong>PRESTIGE</strong><br> @1450/-</th>\r\n                            </tr>\r\n                        </thead>\r\n\r\n                        <tbody>\r\n                            <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>JUICE</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>SEASONAL JUICE</td>\r\n                                <td>-</td>\r\n                                <td>-</td>\r\n                                <td>1</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>STARTERS</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>SOUP</td>\r\n                                <td>1</td>\r\n                                <td>1</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>SALAD</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>STATION - 4</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>CHAAT</td>\r\n                                <td>-</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">7</th>\r\n                                <td>ORIENTAL &amp; CONTINENTAL</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">8</th>\r\n                                <td>LIVE COUNTERS</td>\r\n                                <td>1</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">9</th>\r\n                                <td>INDIAN</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">10</th>\r\n                                <td>BREADS</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>ASSORTED BREADS</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">10</th>\r\n                                <td>RICE </td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">11</th>\r\n                                <td>DAL</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">12</th>\r\n                                <td>DESSERTS</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>3 + 1 (Continental)</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">13</th>\r\n                                <td>ICE CREAM</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n\r\n                        </tbody>\r\n                    </table>\r\n                </div>\r\n                <div class=\"text-center table-active text-white\"></div>\r\n            </div>', 'regent', 1, '2025-03-17 00:55:56', '2025-03-17 00:57:07'),
(3, 'BANJARA HALL PACKAGES', '<h2 class=\"text-center mb-3\">BANJARA HALL PACKAGES</h2>\r\n            <div class=\"col-lg-8 offset-lg-2 pcktable\">\r\n                <div class=\"table-responsive\">\r\n                    <table class=\"table table-striped table-hover mb-0\">\r\n                        <thead class=\"table-warning\">\r\n                            <tr>\r\n                                <th scope=\"col\">#</th>\r\n                                <th scope=\"col\">PACKAGES</th>\r\n                                <th scope=\"col\"><strong>DELUXE</strong><br> @950/-</th>\r\n                                <th scope=\"col\"><strong>GRAND</strong><br> @1050/-</th>\r\n                                <th scope=\"col\"><strong>ROYAL</strong><br> @1200/-</th>\r\n                            </tr>\r\n                        </thead>\r\n\r\n                        <tbody>\r\n                            <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>JUICE</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>SNACKS</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>SALAD</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>ORIENTAL/CONTINENTAL</td>\r\n                                <td>1</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>LIVE STATION</td>\r\n                                <td>1</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>INDIAN</td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">7</th>\r\n                                <td>INDIAN BREADS</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">8</th>\r\n                                <td>DAL</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">9</th>\r\n                                <td>CHAWAL LA JAWAB</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">10</th>\r\n                                <td>\r\n                                    MAN PASAND MITHAI\r\n\r\n                                </td>\r\n                                <td>2</td>\r\n                                <td>3</td>\r\n                                <td>3</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">11</th>\r\n                                <td>ICE CREAM</td>\r\n                                <td>1</td>\r\n                                <td>2</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <th scope=\"row\">12</th>\r\n                                <td>CHAAT STATION</td>\r\n                                <td>-</td>\r\n                                <td>-</td>\r\n                                <td>2</td>\r\n                            </tr>\r\n\r\n                        </tbody>\r\n                    </table>\r\n                </div>\r\n                <div class=\"text-center py-1 table-active text-white\"></div>\r\n            </div>', 'banjara', 1, '2025-03-17 00:58:54', '2025-03-17 00:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `likes` int(11) DEFAULT 0,
  `is_approved` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `parent_id`, `name`, `email`, `comment`, `likes`, `is_approved`, `created_at`, `updated_at`) VALUES
(5, 1, NULL, 'pritesh.prajapati', 'test@example.com', 'aaa', 1, 1, '2025-03-06 02:49:42', '2025-03-06 08:52:03'),
(6, 1, NULL, 'CAs', 'admin@gmail.com', 'aa121', 2, 1, '2025-03-06 02:49:54', '2025-03-06 08:51:52'),
(7, 1, 5, 'rakesh', 'rushi.dave195@gmail.com', 'aa22', 0, 1, '2025-03-06 03:01:35', '2025-03-06 08:31:41'),
(8, 6, NULL, 'Admin', 'test@example.com', 'aa', 0, 0, '2025-03-13 01:43:33', '2025-03-13 07:13:33'),
(9, 8, NULL, 'dfg', 'admin@gmail.com', 'uiiy', 0, 0, '2025-03-13 02:01:46', '2025-03-13 07:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `hours` varchar(256) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `description`, `location`, `image`, `hours`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'bghjh', 'Ahmedabad', '1733999540.png', '12hr', 1, '2024-12-12 05:02:20', '2024-12-12 06:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `type` enum('anantaa','regent','banjara') NOT NULL DEFAULT 'anantaa',
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `title`, `heading`, `type`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anantaa Hall', 'Anantaa Hall', 'anantaa', '1741155369.webp', 1, '2025-03-05 06:16:09', '2025-03-05 06:16:09'),
(2, 'Anantaa Hall', 'Anantaa Hall', 'anantaa', '1741155432.webp', 1, '2025-03-05 06:17:12', '2025-03-05 06:17:12'),
(3, 'Regent Hall', 'Regent Hall', 'regent', '1741155470.webp', 1, '2025-03-05 06:17:50', '2025-03-05 06:17:50'),
(4, 'Regent Hall', 'Regent Hall', 'regent', '1741155481.webp', 1, '2025-03-05 06:18:01', '2025-03-05 06:18:01'),
(5, 'Banjara Hall', 'Banjara Hall', 'banjara', '1741155508.webp', 1, '2025-03-05 06:18:28', '2025-03-05 06:18:28'),
(6, 'Banjara Hall', 'Banjara Hall', 'banjara', '1741155517.webp', 1, '2025-03-05 06:18:37', '2025-03-05 06:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(13) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `hall_name` varchar(255) DEFAULT NULL,
  `no_of_guest` varchar(150) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `referance_any` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_24_184706_create_permission_tables', 1),
(5, '2020_09_12_043205_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(8, 'admin.create', 'admin', 'admin', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(9, 'admin.view', 'admin', 'admin', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(10, 'admin.edit', 'admin', 'admin', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(11, 'admin.delete', 'admin', 'admin', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(12, 'admin.approve', 'admin', 'admin', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(13, 'role.create', 'admin', 'role', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(14, 'role.view', 'admin', 'role', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(15, 'role.edit', 'admin', 'role', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(16, 'role.delete', 'admin', 'role', '2024-11-13 03:32:55', '2024-11-13 03:32:55'),
(17, 'role.approve', 'admin', 'role', '2024-11-13 03:32:56', '2024-11-13 03:32:56'),
(18, 'profile.view', 'admin', 'profile', '2024-11-13 03:32:56', '2024-11-13 03:32:56'),
(19, 'profile.edit', 'admin', 'profile', '2024-11-13 03:32:56', '2024-11-13 03:32:56'),
(20, 'profile.delete', 'admin', 'profile', '2024-11-13 03:32:56', '2024-11-13 03:32:56'),
(21, 'profile.update', 'admin', 'profile', '2024-11-13 03:32:56', '2024-11-13 03:32:56'),
(22, 'banner.create', 'admin', 'banner', '2024-11-13 10:47:52', NULL),
(23, 'banner.view', 'admin', 'banner', '2024-11-13 10:47:52', NULL),
(24, 'banner.edit', 'admin', 'banner', '2024-11-13 10:47:52', NULL),
(25, 'banner.delete', 'admin', 'banner', '2024-11-13 10:47:52', NULL),
(26, 'banner.approve', 'admin', 'banner', '2024-11-13 10:47:52', NULL),
(37, 'cms.create', 'admin', 'cms', '2024-11-13 10:47:52', NULL),
(38, 'cms.view', 'admin', 'cms', '2024-11-13 10:47:52', NULL),
(39, 'cms.edit', 'admin', 'cms', '2024-11-13 10:47:52', NULL),
(40, 'cms.delete', 'admin', 'cms', '2024-11-13 10:47:52', NULL),
(41, 'cms.approve', 'admin', 'cms', '2024-11-13 10:47:52', NULL),
(42, 'blogs.create', 'admin', 'blogs', '2024-11-13 10:47:52', NULL),
(43, 'blogs.view', 'admin', 'blogs', '2024-11-13 10:47:52', NULL),
(44, 'blogs.edit', 'admin', 'blogs', '2024-11-13 10:47:52', NULL),
(45, 'blogs.delete', 'admin', 'blogs', '2024-11-13 10:47:52', NULL),
(46, 'blogs.approve', 'admin', 'blogs', '2024-11-13 10:47:52', NULL),
(47, 'client.create', 'admin', 'client', '2024-11-13 10:47:52', NULL),
(48, 'client.view', 'admin', 'client', '2024-11-13 10:47:52', NULL),
(49, 'client.edit', 'admin', 'client', '2024-11-13 10:47:52', NULL),
(50, 'client.delete', 'admin', 'client', '2024-11-13 10:47:52', NULL),
(51, 'client.approve', 'admin', 'client', '2024-11-13 10:47:52', NULL),
(52, 'Ourteam.create', 'admin', 'Ourteam', '2024-11-13 10:47:52', NULL),
(53, 'Ourteam.view', 'admin', 'Ourteam', '2024-11-13 10:47:52', NULL),
(54, 'Ourteam.edit', 'admin', 'Ourteam', '2024-11-13 10:47:52', NULL),
(55, 'Ourteam.delete', 'admin', 'Ourteam', '2024-11-13 10:47:52', NULL),
(56, 'Ourteam.approve', 'admin', 'Ourteam', '2024-11-13 10:47:52', NULL),
(57, 'event.create', 'admin', 'event', '2024-11-13 10:47:52', NULL),
(58, 'event.view', 'admin', 'event', '2024-11-13 10:47:52', NULL),
(59, 'event.edit', 'admin', 'event', '2024-11-13 10:47:52', NULL),
(60, 'event.delete', 'admin', 'event', '2024-11-13 10:47:52', NULL),
(61, 'event.approve', 'admin', 'event', '2024-11-13 10:47:52', NULL),
(62, 'plan.create', 'admin', 'plan', '2024-11-13 10:47:52', NULL),
(63, 'plan.view', 'admin', 'plan', '2024-11-13 10:47:52', NULL),
(64, 'plan.edit', 'admin', 'plan', '2024-11-13 10:47:52', NULL),
(65, 'plan.delete', 'admin', 'plan', '2024-11-13 10:47:52', NULL),
(66, 'plan.approve', 'admin', 'plan', '2024-11-13 10:47:52', NULL),
(67, 'testimonial.create', 'admin', 'testimonial', '2024-11-13 10:47:52', NULL),
(68, 'testimonial.view', 'admin', 'testimonial', '2024-11-13 10:47:52', NULL),
(69, 'testimonial.edit', 'admin', 'testimonial', '2024-11-13 10:47:52', NULL),
(70, 'testimonial.delete', 'admin', 'testimonial', '2024-11-13 10:47:52', NULL),
(71, 'testimonial.approve', 'admin', 'testimonial', '2024-11-13 10:47:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(100) DEFAULT NULL,
  `sort_desc` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `image` varchar(256) DEFAULT NULL,
  `validity` varchar(100) DEFAULT NULL,
  `session` varchar(100) DEFAULT NULL,
  `plan_type` enum('Member Plan','Service Plan') NOT NULL DEFAULT 'Member Plan',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `sort_desc`, `description`, `price`, `image`, `validity`, `session`, `plan_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'sdf sdf sdf', 'sdf sdfsdfsdfsdf', 1420.00, NULL, '12 month', 'Session 1', 'Member Plan', 1, '2024-12-25 06:57:02', '2024-12-25 06:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2024-11-13 03:32:55', '2024-11-13 03:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pritesh.prajapati', 'PHP', '1733920385.png', 1, '2024-12-11 07:03:05', '2024-12-11 07:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pritesh Prajapati', 'admin@gmail.com', NULL, '$2y$12$1Zw6v/pZ2fHaCUbemvLLMO8GgSi7PqHV.tGs1dqkMaUsJfh3l4Wcy', NULL, '2024-11-13 03:32:55', '2024-11-13 03:32:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
