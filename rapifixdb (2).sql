-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 11:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapifixdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminadmin_actions`
--

CREATE TABLE `adminadmin_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `controller_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inherit` int(11) NOT NULL DEFAULT '0',
  `edit_based` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminadmin_actions`
--

INSERT INTO `adminadmin_actions` (`id`, `controller_id`, `action`, `inherit`, `edit_based`, `name`, `about`, `created_at`, `updated_at`) VALUES
(1, 1, 'index', -1, 0, 'Dashboard', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(2, 1, 'logs', -1, 0, 'View Admin Logs', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(3, 1, 'your-requests', -1, 0, 'View publish requests', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(4, 1, 'requests', -1, 0, 'View requests to moderate', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(5, 2, 'index', 0, 0, 'Show Page Management', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(6, 2, 'sort', 0, 0, 'Sort Pages', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(7, 2, 'add', 0, 0, 'Add Pages', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(8, 2, 'edit', 0, 0, 'Edit Pages', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(9, 2, 'delete', 0, 0, 'Delete Pages', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(10, 2, 'version-publish', 0, 0, 'Publish Versions', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(11, 2, 'version-rename', 0, 1, 'Rename Versions', 'required to be logged is as author or have publishing permission', '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(12, 2, 'versions', 0, 1, 'Ajax Versions Table', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(13, 2, 'request-publish', 0, 1, 'Make Requests', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(14, 2, 'request-publish-action', 0, 1, 'Action Requests (cancel/approve/deny)', 'required to be logged in as author to cancel or else have publish permissions', '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(15, 2, 'requests', 0, 1, 'Ajax Requests Table', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(16, 2, 'tinymce-page-list', 5, 0, 'TinyMce Page Links', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(17, 3, 'pages', 5, 0, 'List Group Pages', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(18, 4, 'index', 0, 0, 'Show Menu Items', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(19, 4, 'sort', 0, 0, 'Sort Menu Items', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(20, 4, 'add', 0, 0, 'Add Menu Items', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(21, 4, 'delete', 0, 0, 'Delete Menu Items', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(22, 4, 'rename', 0, 0, 'Rename Menu Items', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(23, 4, 'get-levels', 19, 0, 'Get Subpage Level', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(24, 4, 'save-levels', 22, 0, 'Set Subpage Level', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(25, 5, 'index', 0, 0, 'Edit Site-wide Content', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(26, 6, 'index', 0, 0, 'View Files', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(27, 6, 'edit', 0, 0, 'Manage Files', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(28, 7, 'index', 0, 0, 'View Redirects', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(29, 7, 'edit', 0, 0, 'Manage Redirects', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(30, 7, 'import', 29, 0, 'Import Redirects', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(31, 8, 'index', 0, 0, 'Show Account Settings', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(32, 8, 'password', 0, 0, 'Change Password', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(33, 8, 'blog', 0, 0, 'Auto Blog Login', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(34, 9, 'index', 0, 0, 'Show System Settings', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(35, 9, 'update', 0, 0, 'Updates System Settings', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(36, 9, 'search', 35, 0, 'Rebuild Search Indexes', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(37, 9, 'validate-db', 35, 0, 'Validate Database', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(38, 9, 'wp-login', 33, 0, 'WordPress Auto Login Script', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(39, 10, 'index', 0, 0, 'View User List', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(40, 10, 'edit', 0, 0, 'Edit Users', 'can edit roles of users (restricted by admin level)', '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(41, 10, 'add', 40, 0, 'Add Users', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(42, 10, 'delete', 40, 0, 'Remove Users', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(43, 11, 'index', 0, 0, 'Role Management', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(44, 11, 'add', 43, 0, 'Add Roles', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(45, 11, 'edit', 43, 0, 'Edit Roles', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(46, 11, 'delete', 43, 0, 'Delete Roles', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(47, 11, 'actions', 43, 0, 'Ajax Get Role Actions', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(48, 11, 'pages', 43, 0, 'Set Per Page Actions', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(49, 12, 'restore', 0, 0, 'Restore Deleted Item From Any User', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(50, 12, 'undo', -1, 0, 'Undo Own Actions', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(51, 13, 'index', -1, 0, 'Create Repeater Row', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(52, 14, 'list', 0, 1, 'Gallery List', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(53, 14, 'edit', 0, 1, 'Edit Galleries', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(54, 14, 'update', 0, 1, 'Run Gallery Upload Manager', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(55, 14, 'sort', 0, 1, 'Sort Images', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(56, 14, 'upload', 0, 1, 'Upload Images', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(57, 14, 'delete', 0, 1, 'Delete Images', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(58, 14, 'caption', 0, 1, 'Edit Captions', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(59, 15, 'list', 0, 1, 'Forms List', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(60, 15, 'submissions', 0, 1, 'View Form Submissions', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(61, 15, 'csv', 0, 1, 'Export Form Submissions', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(62, 16, 'index', 0, 0, 'Show Theme Management', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(63, 16, 'update', 0, 0, 'Theme Block Updater', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(64, 16, 'beacons', 0, 0, 'Import Beacons', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(65, 16, 'beacons-update', 0, 0, 'Update Beacon Blocks', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(66, 9, 'keys', -1, 0, 'Request browser API keys', 'only keys with the string browser in can be called', '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(67, 8, 'page-state', -1, 0, 'Save page list state', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(68, 8, 'language', -1, 0, 'Change current language', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(69, 9, 'upgrade', 0, 0, 'Upgrade CMS', NULL, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(70, 16, 'forms', 0, 0, 'Change Form Rules', NULL, '2019-06-16 04:00:05', '2019-06-16 04:00:05'),
(71, 16, 'selects', 0, 0, 'Change Select Block Options', NULL, '2019-06-16 04:00:06', '2019-06-16 04:00:06'),
(72, 16, 'manage', 0, 0, 'Add/Remove Themes', NULL, '2019-06-16 04:00:07', '2019-06-16 04:00:07'),
(73, 16, 'list', 62, 0, 'View Uploaded Themes', NULL, '2019-06-16 04:00:07', '2019-06-16 04:00:07'),
(74, 16, 'export', 0, 0, 'Export Uploaded Themes', NULL, '2019-06-16 04:00:07', '2019-06-16 04:00:07'),
(75, 2, 'version-schedule', 10, 0, 'Schedule Versions', NULL, '2019-06-16 04:00:10', '2019-06-16 04:00:10'),
(76, 17, 'index', -1, 0, 'View Search Log', NULL, '2019-06-16 04:00:11', '2019-06-16 04:00:11'),
(77, 16, 'edit', -1, 0, 'Edit Theme', NULL, '2019-06-16 04:00:11', '2019-06-16 04:00:11'),
(78, 8, 'name', -1, 0, 'Set Alias', NULL, '2019-06-16 04:00:12', '2019-06-16 04:00:12'),
(79, 3, 'edit', 0, 0, 'Edit Group Settings', NULL, '2019-06-16 04:00:13', '2019-06-16 04:00:13'),
(80, 18, 'index', -1, 0, 'Ajax Search', NULL, '2019-06-16 04:00:24', '2019-06-16 04:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `adminadmin_controllers`
--

CREATE TABLE `adminadmin_controllers` (
  `id` int(10) UNSIGNED NOT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_order` int(11) NOT NULL,
  `role_section` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminadmin_controllers`
--

INSERT INTO `adminadmin_controllers` (`id`, `controller`, `role_name`, `role_order`, `role_section`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Dashboard', 1, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(2, 'pages', 'Pages', 1, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(3, 'groups', 'Groups', 1, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(4, 'menus', 'Menus', 2, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(5, 'blocks', 'Site-wide Content', 3, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(6, 'filemanager', 'Filemanager', 4, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(7, 'redirects', 'Redirects', 5, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(8, 'account', 'User Account', 1, 2, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(9, 'system', 'System Settings', 2, 2, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(10, 'users', 'Users', 1, 3, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(11, 'roles', 'Roles', 2, 3, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(12, 'backups', 'Backups', 3, 3, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(13, 'repeaters', 'Repeaters', 1, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(14, 'gallery', 'Galleries', 1, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(15, 'forms', 'Forms', 1, 1, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(16, 'themes', 'Themes', 3, 2, '2019-06-16 03:59:41', '2019-06-16 03:59:41'),
(17, 'search', 'Search log', 4, 3, '2019-06-16 04:00:11', '2019-06-16 04:00:11'),
(18, 'adminsearch', 'Admin Search', 0, 2, '2019-06-16 04:00:24', '2019-06-16 04:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `adminadmin_logs`
--

CREATE TABLE `adminadmin_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `log` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminadmin_logs`
--

INSERT INTO `adminadmin_logs` (`id`, `user_id`, `log`, `created_at`, `updated_at`) VALUES
(1, 1, 'Setup CMS', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(2, 1, 'Added page \'index\' (Page ID 1)', '2019-06-16 05:58:01', '2019-06-16 05:58:01'),
(3, 1, 'Updated page \'index\' (Page ID 1)', '2019-06-16 06:00:38', '2019-06-16 06:00:38'),
(4, 1, 'Updated page \'index\' (Page ID 1)', '2019-06-16 06:01:17', '2019-06-16 06:01:17'),
(5, 1, 'Updated page \'index\' (Page ID 1)', '2019-06-16 06:06:34', '2019-06-16 06:06:34'),
(6, 1, 'Updated page \'index\' (Page ID 1)', '2019-06-16 06:27:37', '2019-06-16 06:27:37'),
(7, 1, 'Updated Site-wide Content', '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(8, 1, 'Menu Item \'index\' added to \'Main Menu\'', '2019-06-17 05:09:29', '2019-06-17 05:09:29'),
(9, 1, 'Renamed menu item \'index\' in \'Main Menu\' to Pagina de inicio', '2019-06-17 05:10:10', '2019-06-17 05:10:10'),
(10, 1, 'Updated Site-wide Content', '2019-06-17 05:10:53', '2019-06-17 05:10:53'),
(11, 1, 'Added page \'inicio\' (Page ID 2)', '2019-06-17 05:15:08', '2019-06-17 05:15:08'),
(12, 1, 'Updated Site-wide Content', '2019-06-17 05:18:02', '2019-06-17 05:18:02'),
(13, 1, 'Re-ordered pages in \'top level\' (Page ID 2)', '2019-06-19 08:09:15', '2019-06-19 08:09:15'),
(14, 1, 'Re-ordered pages in \'top level\' (Page ID 1)', '2019-06-19 08:09:21', '2019-06-19 08:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `adminadmin_menu`
--

CREATE TABLE `adminadmin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `action_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminadmin_menu`
--

INSERT INTO `adminadmin_menu` (`id`, `action_id`, `parent`, `order`, `icon`, `item_name`, `item_desc`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 'fa fa-home', 'Dashboard', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(2, 5, 0, 2, 'fa fa-file-text-o', 'Pages', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(3, 18, 0, 3, 'fa fa-bars', 'Menus', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(4, 25, 0, 4, 'fa fa-globe', 'Site-wide Content', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(5, 28, 0, 5, 'fa fa-exchange', 'Redirects', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(6, 26, 0, 6, 'fa fa-folder-open', 'File Manager', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(7, 39, 0, 7, 'fa fa-user', 'Users', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(8, 43, 0, 8, 'fa fa-bullhorn', 'Roles', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(9, 62, 0, 9, 'fa fa-tint', 'Theme', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42'),
(10, 64, 0, 9, 'fa fa-bluetooth-b', 'Beacons', '', '2019-06-16 03:59:42', '2019-06-16 03:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `adminbackups`
--

CREATE TABLE `adminbackups` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_id` int(11) NOT NULL,
  `primary_id` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminblocks`
--

CREATE TABLE `adminblocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `search_weight` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminblocks`
--

INSERT INTO `adminblocks` (`id`, `category_id`, `label`, `name`, `type`, `order`, `search_weight`, `active`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 'Content Image', 'content_image', 'image', 0, 1, 1, '', '2019-06-16 05:37:50', '2019-06-16 05:37:50'),
(2, 5, 'Meta Title', 'meta_title', 'string', 10, 1, 1, '', '2019-06-16 05:37:50', '2019-06-16 05:37:50'),
(3, 5, 'Meta Description', 'meta_description', 'text', 20, 1, 1, '', '2019-06-16 05:37:50', '2019-06-16 05:37:50'),
(4, 5, 'Meta Keywords', 'meta_keywords', 'text', 30, 1, 1, '', '2019-06-16 05:37:50', '2019-06-16 05:37:50'),
(5, 1, 'Header Html', 'header_html', 'text', 10, 1, 1, '', '2019-06-16 05:37:51', '2019-06-16 05:37:51'),
(6, 1, 'Logo', 'logo', 'image', 20, 1, 1, '', '2019-06-16 05:37:51', '2019-06-16 05:37:51'),
(7, 3, 'Internal Banner', 'internal_banner', 'image', 10, 1, 1, '', '2019-06-16 05:37:51', '2019-06-16 05:37:51'),
(8, 2, 'Category View', 'category_view', 'string', 10, 1, 1, '', '2019-06-16 05:37:51', '2019-06-16 05:37:51'),
(9, 2, 'Post Date', 'post_date', 'datetime', 20, 1, 1, '', '2019-06-16 05:37:51', '2019-06-16 05:37:51'),
(10, 2, 'Content', 'content', 'richtext', 30, 1, 1, '', '2019-06-16 05:37:51', '2019-06-16 05:37:51'),
(11, 2, 'Title', 'title', 'string', 40, 1, 1, '', '2019-06-16 05:37:51', '2019-06-16 05:37:51'),
(12, 2, 'Lead Text', 'lead_text', 'text', 50, 1, 1, '', '2019-06-16 05:37:52', '2019-06-16 05:37:52'),
(13, 2, 'Blog Category Page', 'blog_category_page', 'string', 60, 1, 1, '', '2019-06-16 05:37:52', '2019-06-16 05:37:52'),
(14, 2, 'Blog Main Page', 'blog_main_page', 'string', 70, 1, 1, '', '2019-06-16 05:37:52', '2019-06-16 05:37:52'),
(15, 2, 'Blog Archive Page', 'blog_archive_page', 'string', 80, 1, 1, '', '2019-06-16 05:37:52', '2019-06-16 05:37:52'),
(16, 6, 'Show Features', 'show_features', 'string', 10, 1, 1, '', '2019-06-16 05:37:52', '2019-06-16 05:37:52'),
(17, 6, 'Features Title', 'features_title', 'string', 20, 1, 1, '', '2019-06-16 05:37:52', '2019-06-16 05:37:52'),
(18, 6, 'Features Lead Text', 'features_lead_text', 'text', 30, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(19, 6, 'Feature', 'feature', 'repeater', 70, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(20, 6, 'Feature Icon', 'feature_icon', 'string', 40, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(21, 6, 'Feature Title', 'feature_title', 'string', 50, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(22, 6, 'Feature Text', 'feature_text', 'text', 60, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(23, 7, 'Social', 'social', 'repeater', 40, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(24, 7, 'Social Link', 'social_link', 'link', 10, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(25, 7, 'Social Icon', 'social_icon', 'string', 20, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(26, 7, 'Social Name', 'social_name', 'string', 30, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(27, 2, 'Scroll To Top Text', 'scroll_to_top_text', 'text', 90, 1, 1, '', '2019-06-16 05:37:53', '2019-06-16 05:37:53'),
(28, 4, 'Copyright', 'copyright', 'string', 10, 1, 1, '', '2019-06-16 05:37:54', '2019-06-16 05:37:54'),
(29, 2, 'Blog Search Page', 'blog_search_page', 'string', 100, 1, 1, '', '2019-06-16 05:37:54', '2019-06-16 05:37:54'),
(30, 4, 'Footer Html', 'footer_html', 'text', 20, 1, 1, '', '2019-06-16 05:37:54', '2019-06-16 05:37:54'),
(31, 2, 'Post Author', 'post_author', 'string', 30, 1, 1, '', '2019-06-16 05:37:54', '2019-06-16 05:37:54'),
(32, 2, 'Video', 'video', 'video', 40, 1, 1, '', '2019-06-16 05:37:54', '2019-06-16 05:37:54'),
(33, 2, 'Categories', 'categories', 'string', 50, 1, 1, '', '2019-06-16 05:37:54', '2019-06-16 05:37:54'),
(34, 8, 'Comments', 'comments', 'repeater', 10, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(35, 2, 'Comment Author', 'comment_author', 'string', 60, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(36, 2, 'Comment Content', 'comment_content', 'richtext', 70, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(37, 2, 'Comment Date', 'comment_date', 'datetime', 80, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(38, 1, 'Email', 'email', 'string', 30, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(39, 1, 'Phone', 'phone', 'string', 40, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(40, 4, 'Address', 'address', 'text', 10, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(41, 2, 'Contact Form', 'contact_form', 'form', 50, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(42, 2, 'Contact Form Text', 'contact_form_text', 'form', 40, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(43, 2, 'Map Link', 'map_link', 'link', 60, 1, 1, '', '2019-06-16 05:37:55', '2019-06-16 05:37:55'),
(44, 3, 'Carousel', 'carousel', 'repeater', 10, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(45, 2, 'Slide Image', 'slide_image', 'image', 10, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(46, 2, 'Slide Title', 'slide_title', 'string', 20, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(47, 2, 'Slide Text', 'slide_text', 'text', 30, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(48, 2, 'Slide Button Link', 'slide_button_link', 'link', 40, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(49, 2, 'Slide Button Text', 'slide_button_text', 'text', 50, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(50, 2, 'Slide Button Icon', 'slide_button_icon', 'string', 60, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(51, 2, 'Show Sub Pages', 'show_sub_pages', 'selectpage', 70, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(52, 3, 'Banner', 'banner', 'repeater', 40, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(53, 3, 'Banner Link', 'banner_link', 'link', 20, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(54, 3, 'Banner Image', 'banner_image', 'image', 30, 1, 1, '', '2019-06-16 05:37:56', '2019-06-16 05:37:56'),
(55, 2, 'Sidebar Title', 'sidebar_title', 'string', 10, 1, 1, '', '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(56, 2, 'Sidebar Content', 'sidebar_content', 'richtext', 20, 1, 1, '', '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(57, 9, 'Team', 'team', 'repeater', 10, 1, 1, '', '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(58, 2, 'Member Image', 'member_image', 'image', 40, 1, 1, '', '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(59, 2, 'Member Name', 'member_name', 'string', 50, 1, 1, '', '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(60, 2, 'Member Text', 'member_text', 'text', 60, 1, 1, '', '2019-06-16 05:37:57', '2019-06-16 05:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `adminblock_beacons`
--

CREATE TABLE `adminblock_beacons` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kontakt',
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `removed` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminblock_category`
--

CREATE TABLE `adminblock_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminblock_category`
--

INSERT INTO `adminblock_category` (`id`, `name`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Header', 20, '2019-06-16 05:37:48', '2019-06-16 05:37:48'),
(2, 'Main', 40, '2019-06-16 05:37:48', '2019-06-16 05:37:48'),
(3, 'Banner', 60, '2019-06-16 05:37:48', '2019-06-16 05:37:48'),
(4, 'Footer', 80, '2019-06-16 05:37:48', '2019-06-16 05:37:48'),
(5, 'Seo', 100, '2019-06-16 05:37:48', '2019-06-16 05:37:48'),
(6, 'Features', 120, '2019-06-16 05:37:49', '2019-06-16 05:37:49'),
(7, 'Socials', 140, '2019-06-16 05:37:49', '2019-06-16 05:37:49'),
(8, 'Comments', 160, '2019-06-16 05:37:49', '2019-06-16 05:37:49'),
(9, 'Teams', 180, '2019-06-16 05:37:50', '2019-06-16 05:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `adminblock_form_rules`
--

CREATE TABLE `adminblock_form_rules` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminblock_repeaters`
--

CREATE TABLE `adminblock_repeaters` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_id` int(11) NOT NULL,
  `blocks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_rows` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminblock_repeaters`
--

INSERT INTO `adminblock_repeaters` (`id`, `block_id`, `blocks`, `item_name`, `max_rows`, `created_at`, `updated_at`) VALUES
(1, 19, '20,21,22', NULL, NULL, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(2, 23, '24,25,26', NULL, NULL, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(3, 34, '35,36,37', NULL, NULL, '2019-06-16 05:38:05', '2019-06-16 05:38:05'),
(4, 44, '45,46,47,48,49,50', NULL, NULL, '2019-06-16 05:38:05', '2019-06-16 05:38:05'),
(5, 52, '53,54', NULL, NULL, '2019-06-16 05:38:05', '2019-06-16 05:38:05'),
(6, 57, '58,59,60', NULL, NULL, '2019-06-16 05:38:05', '2019-06-16 05:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `adminblock_selectopts`
--

CREATE TABLE `adminblock_selectopts` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_id` int(11) NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminblock_video_cache`
--

CREATE TABLE `adminblock_video_cache` (
  `id` int(10) UNSIGNED NOT NULL,
  `videoId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `videoInfo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminform_submissions`
--

CREATE TABLE `adminform_submissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_block_id` int(11) NOT NULL,
  `from_page_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminlanguages`
--

CREATE TABLE `adminlanguages` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlanguages`
--

INSERT INTO `adminlanguages` (`id`, `language`, `created_at`, `updated_at`) VALUES
(1, 'English', '2019-06-16 03:59:50', '2019-06-16 03:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `adminmenus`
--

CREATE TABLE `adminmenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_sublevel` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminmenus`
--

INSERT INTO `adminmenus` (`id`, `label`, `name`, `max_sublevel`, `created_at`, `updated_at`) VALUES
(1, 'Main Menu', 'main_menu', 1, '2019-06-16 05:37:35', '2019-06-16 05:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `adminmenu_items`
--

CREATE TABLE `adminmenu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `sub_levels` int(11) NOT NULL DEFAULT '0',
  `custom_name` text COLLATE utf8mb4_unicode_ci,
  `custom_page_names` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hidden_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminmenu_items`
--

INSERT INTO `adminmenu_items` (`id`, `menu_id`, `page_id`, `order`, `sub_levels`, `custom_name`, `custom_page_names`, `hidden_pages`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1, 0, 'Pagina de inicio', NULL, NULL, '2019-06-17 05:09:29', '2019-06-17 05:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `adminmigrations`
--

CREATE TABLE `adminmigrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminmigrations`
--

INSERT INTO `adminmigrations` (`id`, `migration`, `batch`) VALUES
(1, '5_2_0_0_create_admin_actions', 1),
(2, '5_2_0_0_create_admin_controllers', 1),
(3, '5_2_0_0_create_admin_logs', 1),
(4, '5_2_0_0_create_admin_menu', 1),
(5, '5_2_0_0_create_backups', 1),
(6, '5_2_0_0_create_block_beacons', 1),
(7, '5_2_0_0_create_block_category', 1),
(8, '5_2_0_0_create_block_form_rules', 1),
(9, '5_2_0_0_create_block_repeaters', 1),
(10, '5_2_0_0_create_block_selectopts', 1),
(11, '5_2_0_0_create_block_video_cache', 1),
(12, '5_2_0_0_create_blocks', 1),
(13, '5_2_0_0_create_form_submissions', 1),
(14, '5_2_0_0_create_languages', 1),
(15, '5_2_0_0_create_menu_items', 1),
(16, '5_2_0_0_create_menus', 1),
(17, '5_2_0_0_create_page_blocks', 1),
(18, '5_2_0_0_create_page_blocks_default', 1),
(19, '5_2_0_0_create_page_blocks_repeater_data', 1),
(20, '5_2_0_0_create_page_blocks_repeater_rows', 1),
(21, '5_2_0_0_create_page_group', 1),
(22, '5_2_0_0_create_page_group_attributes', 1),
(23, '5_2_0_0_create_page_lang', 1),
(24, '5_2_0_0_create_page_publish_requests', 1),
(25, '5_2_0_0_create_page_redirects', 1),
(26, '5_2_0_0_create_page_search_data', 1),
(27, '5_2_0_0_create_page_search_log', 1),
(28, '5_2_0_0_create_page_versions', 1),
(29, '5_2_0_0_create_pages', 1),
(30, '5_2_0_0_create_settings', 1),
(31, '5_2_0_0_create_template_blocks', 1),
(32, '5_2_0_0_create_templates', 1),
(33, '5_2_0_0_create_theme_blocks', 1),
(34, '5_2_0_0_create_themes', 1),
(35, '5_2_0_0_create_user_roles', 1),
(36, '5_2_0_0_create_user_roles_actions', 1),
(37, '5_2_0_0_create_user_roles_page_actions', 1),
(38, '5_2_0_0_create_users', 1),
(39, '5_2_19_0_update_theme_actions', 1),
(40, '5_2_20_0_update_theme_select_actions', 1),
(41, '5_2_22_0_update_theme_manage_actions', 1),
(42, '5_2_23_0_add_secure_folders_setting', 1),
(43, '5_2_26_0_add_theme_actions', 1),
(44, '5_2_27_0_add_block_notes', 1),
(45, '5_2_30_0_add_pages_sitemap', 1),
(46, '5_2_35_0_create_page_versions_schedule', 1),
(47, '5_2_36_0_update_search_log_admin', 1),
(48, '5_3_0_0_add_theme_editor_actions', 1),
(49, '5_3_0_0_add_user_name', 1),
(50, '5_3_0_0_create_page_group_pages', 1),
(51, '5_3_0_0_update_group_pages', 1),
(52, '5_3_15_0_update_menu_items', 1),
(53, '5_3_23_0_add_estimote_support', 1),
(54, '5_3_5_0_add_search_action', 1),
(55, '5_4_0_0_add_cache_setting', 1),
(56, '5_4_0_0_add_custom_page_names_in_menu', 1),
(57, '5_4_0_0_block_note_null', 1),
(58, '5_4_0_0_create_theme_templates', 1),
(59, '5_4_0_0_hide_subpage_in_menu', 1),
(60, '5_4_0_0_repeater_item_name', 1),
(61, '5_5_0_0_repeater_max_rows', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminpages`
--

CREATE TABLE `adminpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `template` int(11) NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL DEFAULT '0',
  `child_template` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `group_container` int(11) NOT NULL DEFAULT '0',
  `group_container_url_priority` int(11) NOT NULL DEFAULT '0',
  `canonical_parent` int(11) NOT NULL DEFAULT '0',
  `link` int(11) NOT NULL DEFAULT '0',
  `live` int(11) NOT NULL DEFAULT '1',
  `sitemap` int(11) NOT NULL DEFAULT '1',
  `live_start` timestamp NULL DEFAULT NULL,
  `live_end` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpages`
--

INSERT INTO `adminpages` (`id`, `template`, `parent`, `child_template`, `order`, `group_container`, `group_container_url_priority`, `canonical_parent`, `link`, `live`, `sitemap`, `live_start`, `live_end`, `created_at`, `updated_at`) VALUES
(1, 8, 0, 0, 1, 0, 0, 0, 0, 1, 1, NULL, NULL, '2019-06-16 05:57:57', '2019-06-19 08:09:21'),
(2, 12, 0, 0, 2, 0, 0, 0, 0, 1, 1, NULL, NULL, '2019-06-17 05:15:08', '2019-06-19 08:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_blocks`
--

CREATE TABLE `adminpage_blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `page_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpage_blocks`
--

INSERT INTO `adminpage_blocks` (`id`, `language_id`, `page_id`, `block_id`, `content`, `version`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 11, 'index', 1, '2019-06-16 05:57:57', '2019-06-16 05:57:57'),
(2, 1, 1, 44, '1', 2, '2019-06-16 06:00:38', '2019-06-16 06:00:38'),
(3, 1, 1, 52, '2', 2, '2019-06-16 06:00:38', '2019-06-16 06:00:38'),
(4, 1, 1, 51, '0', 2, '2019-06-16 06:00:39', '2019-06-16 06:00:39'),
(5, 1, 2, 11, 'inicio', 1, '2019-06-17 05:15:08', '2019-06-17 05:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_blocks_default`
--

CREATE TABLE `adminpage_blocks_default` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `block_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpage_blocks_default`
--

INSERT INTO `adminpage_blocks_default` (`id`, `language_id`, `block_id`, `content`, `version`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(2, 1, 10, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(3, 1, 11, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(4, 1, 12, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(5, 1, 27, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(6, 1, 29, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(7, 1, 2, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(8, 1, 3, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(9, 1, 4, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(10, 1, 5, 'ajshajsah', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(11, 1, 6, 'O:8:\"stdClass\":2:{s:4:\"file\";s:67:\"/uploads/images/64225916_1152446154963419_4282359672905662464_n.jpg\";s:5:\"title\";s:0:\"\";}', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(12, 1, 7, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(13, 1, 16, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(14, 1, 17, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(15, 1, 18, '', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(16, 1, 19, '3', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(17, 1, 28, '', 1, '2019-06-17 04:23:56', '2019-06-17 04:23:56'),
(18, 1, 30, '', 1, '2019-06-17 04:23:56', '2019-06-17 04:23:56'),
(19, 1, 23, '4', 1, '2019-06-17 04:23:56', '2019-06-17 04:23:56'),
(20, 1, 7, 'O:8:\"stdClass\":2:{s:4:\"file\";s:66:\"/uploads/images/64234825_455965778591371_4356029451637620736_n.jpg\";s:5:\"title\";s:0:\"\";}', 2, '2019-06-17 05:10:53', '2019-06-17 05:10:53'),
(21, 1, 5, '', 3, '2019-06-17 05:18:03', '2019-06-17 05:18:03'),
(22, 1, 6, '', 3, '2019-06-17 05:18:03', '2019-06-17 05:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_blocks_repeater_data`
--

CREATE TABLE `adminpage_blocks_repeater_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `row_key` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpage_blocks_repeater_data`
--

INSERT INTO `adminpage_blocks_repeater_data` (`id`, `row_key`, `block_id`, `content`, `version`, `created_at`, `updated_at`) VALUES
(1, 4, 0, '1', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(2, 4, 45, 'O:8:\"stdClass\":2:{s:4:\"file\";s:65:\"/uploads/images/64549933_322073772049055_490197085782540288_n.jpg\";s:5:\"title\";s:0:\"\";}', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(3, 4, 46, '', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(4, 4, 47, '', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(5, 4, 48, '', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(6, 4, 49, '', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(7, 4, 50, '', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(8, 5, 0, '2', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(9, 5, 45, 'O:8:\"stdClass\":2:{s:4:\"file\";s:67:\"/uploads/images/64246720_2920533534653398_3025065644052709376_n.png\";s:5:\"title\";s:0:\"\";}', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(10, 5, 46, '', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(11, 5, 47, '', 5, '2019-06-16 06:27:38', '2019-06-16 06:27:38'),
(12, 5, 48, '', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(13, 5, 49, '', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(14, 5, 50, '', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(15, 6, 0, '3', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(16, 6, 45, 'O:8:\"stdClass\":2:{s:4:\"file\";s:66:\"/uploads/images/64234825_455965778591371_4356029451637620736_n.jpg\";s:5:\"title\";s:0:\"\";}', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(17, 6, 46, '', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(18, 6, 47, '', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(19, 6, 48, '', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(20, 6, 49, '', 5, '2019-06-16 06:27:39', '2019-06-16 06:27:39'),
(21, 6, 50, '', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(22, 7, 0, '4', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(23, 7, 45, 'O:8:\"stdClass\":2:{s:4:\"file\";s:67:\"/uploads/images/64225916_1152446154963419_4282359672905662464_n.jpg\";s:5:\"title\";s:0:\"\";}', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(24, 7, 46, '', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(25, 7, 47, '', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(26, 7, 48, '', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(27, 7, 49, '', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(28, 7, 50, '', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(29, 8, 0, '5', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(30, 8, 45, '', 5, '2019-06-16 06:27:40', '2019-06-16 06:27:40'),
(31, 8, 46, '', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(32, 8, 47, '', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(33, 8, 48, '', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(34, 8, 49, '', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(35, 8, 50, '', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(36, 9, 0, '1', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(37, 9, 53, '', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(38, 9, 54, 'O:8:\"stdClass\":2:{s:4:\"file\";s:65:\"/uploads/images/64549933_322073772049055_490197085782540288_n.jpg\";s:5:\"title\";s:0:\"\";}', 5, '2019-06-16 06:27:41', '2019-06-16 06:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_blocks_repeater_rows`
--

CREATE TABLE `adminpage_blocks_repeater_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `repeater_id` int(11) NOT NULL,
  `row_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpage_blocks_repeater_rows`
--

INSERT INTO `adminpage_blocks_repeater_rows` (`id`, `repeater_id`, `row_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2019-06-16 05:58:04', '2019-06-16 05:58:04'),
(2, 2, 0, '2019-06-16 05:58:04', '2019-06-16 05:58:04'),
(3, 1, 1, '2019-06-16 06:06:42', '2019-06-16 06:06:42'),
(4, 1, 2, '2019-06-16 06:25:42', '2019-06-16 06:25:42'),
(5, 1, 3, '2019-06-16 06:25:55', '2019-06-16 06:25:55'),
(6, 1, 4, '2019-06-16 06:26:01', '2019-06-16 06:26:01'),
(7, 1, 5, '2019-06-16 06:26:11', '2019-06-16 06:26:11'),
(8, 1, 6, '2019-06-16 06:26:19', '2019-06-16 06:26:19'),
(9, 2, 1, '2019-06-16 06:27:24', '2019-06-16 06:27:24'),
(10, 3, 0, '2019-06-17 04:23:20', '2019-06-17 04:23:20'),
(11, 4, 0, '2019-06-17 04:23:20', '2019-06-17 04:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_group`
--

CREATE TABLE `adminpage_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_priority` int(11) NOT NULL DEFAULT '50',
  `default_template` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_group_attributes`
--

CREATE TABLE `adminpage_group_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `item_block_id` int(11) NOT NULL,
  `item_block_order_priority` int(11) NOT NULL DEFAULT '0',
  `item_block_order_dir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'asc',
  `filter_by_block_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_group_pages`
--

CREATE TABLE `adminpage_group_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_lang`
--

CREATE TABLE `adminpage_lang` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `live_version` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpage_lang`
--

INSERT INTO `adminpage_lang` (`id`, `page_id`, `language_id`, `url`, `name`, `live_version`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'index', 'index', 5, '2019-06-16 05:57:57', '2019-06-16 06:27:41'),
(2, 2, 1, 'inicio', 'inicio', 1, '2019-06-17 05:15:08', '2019-06-17 05:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_publish_requests`
--

CREATE TABLE `adminpage_publish_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_version_id` int(11) NOT NULL,
  `status` enum('awaiting','approved','denied','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mod_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_redirects`
--

CREATE TABLE `adminpage_redirects` (
  `id` int(10) UNSIGNED NOT NULL,
  `redirect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT '301',
  `force` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_search_data`
--

CREATE TABLE `adminpage_search_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `search_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpage_search_data`
--

INSERT INTO `adminpage_search_data` (`id`, `language_id`, `page_id`, `block_id`, `search_text`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'index', '2019-06-16 05:57:58', '2019-06-16 05:57:58'),
(2, 1, 1, 44, '64549933_322073772049055_490197085782540288_n.jpg\n64246720_2920533534653398_3025065644052709376_n.png\n64234825_455965778591371_4356029451637620736_n.jpg\n64225916_1152446154963419_4282359672905662464_n.jpg\n', '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(3, 1, 1, 52, '64549933_322073772049055_490197085782540288_n.jpg\n', '2019-06-16 06:27:41', '2019-06-16 06:27:41'),
(4, 1, 2, 0, 'inicio', '2019-06-17 05:15:08', '2019-06-17 05:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_search_log`
--

CREATE TABLE `adminpage_search_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_versions`
--

CREATE TABLE `adminpage_versions` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `version_id` int(11) NOT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpage_versions`
--

INSERT INTO `adminpage_versions` (`id`, `page_id`, `version_id`, `template`, `label`, `preview_key`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '8', NULL, '210m2kx138v', 1, '2019-06-16 05:57:57', '2019-06-16 05:57:57'),
(2, 1, 2, '8', NULL, 'wna8l0usak', 1, '2019-06-16 06:00:38', '2019-06-16 06:00:38'),
(3, 1, 3, '8', NULL, 'byw9whh6h1', 1, '2019-06-16 06:01:17', '2019-06-16 06:01:17'),
(4, 1, 4, '8', NULL, '2esvdpd6lzx', 1, '2019-06-16 06:06:34', '2019-06-16 06:06:34'),
(5, 1, 5, '8', NULL, 'cycd9wyluo', 1, '2019-06-16 06:27:37', '2019-06-16 06:27:37'),
(6, 0, 1, '0', NULL, 'ex8kdbbujw', 1, '2019-06-17 04:23:55', '2019-06-17 04:23:55'),
(7, 0, 2, '0', NULL, '4jly2lnbq1', 1, '2019-06-17 05:10:53', '2019-06-17 05:10:53'),
(8, 2, 1, '12', NULL, '28w6tw4r2j0', 1, '2019-06-17 05:15:08', '2019-06-17 05:15:08'),
(9, 0, 3, '0', NULL, '2mog50iv2u5', 1, '2019-06-17 05:18:03', '2019-06-17 05:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage_versions_schedule`
--

CREATE TABLE `adminpage_versions_schedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_version_id` int(11) NOT NULL,
  `live_from` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `repeat_in` int(11) NOT NULL DEFAULT '0',
  `repeat_in_func` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminsettings`
--

CREATE TABLE `adminsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editable` int(11) NOT NULL,
  `hidden` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminsettings`
--

INSERT INTO `adminsettings` (`id`, `label`, `name`, `value`, `editable`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 'Site Name', 'site.name', 'Coaster CMS', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(2, 'Site Email', 'site.email', 'info@example.com', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(3, 'Site Page Limit', 'site.pages', '0', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(4, 'Admin Path', 'admin.url', 'admin', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(5, 'Admin Publishing', 'admin.publishing', '0', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(6, 'Admin Per Page Permissions', 'admin.advanced_permissions', '0', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(7, 'Default Template', 'admin.default_template', '2', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(8, 'Pre-fill Title Block', 'admin.title_block', 'title', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(9, 'Language', 'frontend.language', '1', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(10, 'Theme', 'frontend.theme', '1', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(11, 'WP Blog Url (relative ie. /blog/)', 'blog.url', '', 1, 0, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(12, 'Kontakt API Key for Beacons', 'key.kontakt', '', 1, 1, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(13, 'Bitly Access Token', 'key.bitly', '', 1, 1, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(14, 'Youtube Server API Key', 'key.yt_server', '', 1, 1, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(15, 'Youtube Browser API Key', 'key.yt_browser', '', 1, 1, '2019-06-16 04:00:00', '2019-06-16 04:00:00'),
(16, 'Secure Upload Folders', 'site.secure_folders', 'secure', 1, 0, '2019-06-16 04:00:07', '2019-06-16 04:00:07'),
(17, 'Estimote APP ID', 'appid.estimote', '', 1, 0, '2019-06-16 04:00:23', '2019-06-16 04:00:23'),
(18, 'Estimote API Key', 'key.estimote', '', 1, 0, '2019-06-16 04:00:23', '2019-06-16 04:00:23'),
(19, 'Cache Length (Minutes)', 'frontend.cache', '240', 1, 0, '2019-06-16 04:00:24', '2019-06-16 04:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `admintemplates`
--

CREATE TABLE `admintemplates` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_template` int(11) NOT NULL DEFAULT '0',
  `hidden` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admintemplates`
--

INSERT INTO `admintemplates` (`id`, `label`, `template`, `child_template`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 'Blog-archives Template', 'blog-archives', 0, 0, '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(2, 'Blog-category Template', 'blog-category', 0, 0, '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(3, 'Blog-post Template', 'blog-post', 0, 0, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(4, 'Blog-search Template', 'blog-search', 0, 0, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(5, 'Blog Template', 'blog', 0, 0, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(6, 'Category Template', 'category', 0, 0, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(7, 'Contact Template', 'contact', 0, 0, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(8, 'Home Template', 'home', 0, 0, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(9, 'Internal Template', 'internal', 0, 0, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(10, 'Sitemap Template', 'sitemap', 0, 0, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(11, 'Team Template', 'team', 0, 0, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(12, 'Index Template', 'index', 0, 0, '2019-06-17 05:14:45', '2019-06-17 05:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `adminthemes`
--

CREATE TABLE `adminthemes` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminthemes`
--

INSERT INTO `adminthemes` (`id`, `theme`, `created_at`, `updated_at`) VALUES
(1, 'coaster2019', '2019-06-16 05:37:24', '2019-06-16 05:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `admintheme_blocks`
--

CREATE TABLE `admintheme_blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `show_in_pages` int(11) NOT NULL DEFAULT '0',
  `exclude_templates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_in_global` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admintheme_blocks`
--

INSERT INTO `admintheme_blocks` (`id`, `theme_id`, `block_id`, `show_in_pages`, `exclude_templates`, `show_in_global`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, '', 1, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(2, 1, 2, 0, '', 1, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(3, 1, 3, 0, '', 1, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(4, 1, 4, 0, '', 1, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(5, 1, 5, 0, '', 1, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(6, 1, 6, 0, '', 1, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(7, 1, 7, 0, '8', 1, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(8, 1, 10, 0, '8,10', 1, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(9, 1, 11, 0, '', 1, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(10, 1, 12, 0, '10', 1, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(11, 1, 16, 0, '', 1, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(12, 1, 17, 0, '', 1, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(13, 1, 18, 0, '', 1, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(14, 1, 19, 0, '', 1, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(15, 1, 23, 0, '', 1, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(16, 1, 27, 0, '', 1, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(17, 1, 28, 0, '', 1, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(18, 1, 29, 0, '', 1, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(19, 1, 30, 0, '', 1, '2019-06-16 05:38:03', '2019-06-16 05:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `admintheme_templates`
--

CREATE TABLE `admintheme_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_template` int(11) DEFAULT NULL,
  `hidden` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admintheme_templates`
--

INSERT INTO `admintheme_templates` (`id`, `theme_id`, `template_id`, `label`, `child_template`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(2, 1, 2, NULL, NULL, NULL, '2019-06-16 05:37:57', '2019-06-16 05:37:57'),
(3, 1, 3, NULL, NULL, NULL, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(4, 1, 4, NULL, NULL, NULL, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(5, 1, 5, NULL, NULL, NULL, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(6, 1, 6, NULL, NULL, NULL, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(7, 1, 7, NULL, NULL, NULL, '2019-06-16 05:37:58', '2019-06-16 05:37:58'),
(8, 1, 8, NULL, NULL, NULL, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(9, 1, 9, NULL, NULL, NULL, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(10, 1, 10, NULL, NULL, NULL, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(11, 1, 11, NULL, NULL, NULL, '2019-06-16 05:37:59', '2019-06-16 05:37:59'),
(12, 1, 12, NULL, NULL, NULL, '2019-06-17 05:14:45', '2019-06-17 05:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `admintheme_template_blocks`
--

CREATE TABLE `admintheme_template_blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_template_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admintheme_template_blocks`
--

INSERT INTO `admintheme_template_blocks` (`id`, `theme_template_id`, `block_id`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(2, 2, 8, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(3, 4, 8, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(4, 5, 8, '2019-06-16 05:38:00', '2019-06-16 05:38:00'),
(5, 6, 8, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(6, 3, 9, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(7, 1, 13, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(8, 2, 13, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(9, 3, 13, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(10, 4, 13, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(11, 5, 13, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(12, 1, 14, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(13, 2, 14, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(14, 3, 14, '2019-06-16 05:38:01', '2019-06-16 05:38:01'),
(15, 4, 14, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(16, 5, 14, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(17, 1, 15, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(18, 2, 15, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(19, 3, 15, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(20, 4, 15, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(21, 5, 15, '2019-06-16 05:38:02', '2019-06-16 05:38:02'),
(22, 3, 31, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(23, 3, 32, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(24, 9, 32, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(25, 3, 33, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(26, 3, 34, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(27, 7, 38, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(28, 7, 39, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(29, 7, 40, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(30, 7, 41, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(31, 7, 42, '2019-06-16 05:38:03', '2019-06-16 05:38:03'),
(32, 7, 43, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(33, 8, 44, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(34, 8, 51, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(35, 8, 52, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(36, 9, 55, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(37, 9, 56, '2019-06-16 05:38:04', '2019-06-16 05:38:04'),
(38, 11, 57, '2019-06-16 05:38:04', '2019-06-16 05:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmp_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmp_code_created` timestamp NULL DEFAULT NULL,
  `blog_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_states` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `active`, `password`, `email`, `name`, `role_id`, `remember_token`, `tmp_code`, `tmp_code_created`, `blog_login`, `page_states`, `created_at`, `updated_at`) VALUES
(1, 1, '$2y$10$ozSEmunXv389N6Sn/COjk.3efZ6bHxGhfcxXsYP3tY6sI.mbv7iee', 'sgalindo.smartsoft@gmail.com', NULL, 1, 'IneGkYDDeODxjDLH46Bzf4hROPM4j3CZwuxLqr24mo4T7xP4nlzw3OkUSl5N', 'Dg4e2SUE4AZgN7V4HpZjg2IcPFNHeWqe0.05651700+1560649993', '2019-06-16 06:53:13', NULL, NULL, '2019-06-16 04:01:11', '2019-06-16 06:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `adminuser_roles`
--

CREATE TABLE `adminuser_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminuser_roles`
--

INSERT INTO `adminuser_roles` (`id`, `name`, `admin`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Coaster Superuser', 2, 'Unrestricted Account (can only be removed by superusers)', '2019-06-16 04:00:03', '2019-06-16 04:00:03'),
(2, 'Coaster Admin', 1, 'Default Admin Account', '2019-06-16 04:00:03', '2019-06-16 04:00:03'),
(3, 'Coaster Editor', 1, 'Default Editor Account', '2019-06-16 04:00:03', '2019-06-16 04:00:03'),
(4, 'Coaster Account (Login Access Only)', 1, 'Base Account With Login Access', '2019-06-16 04:00:03', '2019-06-16 04:00:03'),
(5, 'Frontend Guest Account', 0, 'Default Guest Account (no admin access)', '2019-06-16 04:00:03', '2019-06-16 04:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `adminuser_roles_actions`
--

CREATE TABLE `adminuser_roles_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminuser_roles_actions`
--

INSERT INTO `adminuser_roles_actions` (`id`, `role_id`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 2, 5, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(2, 2, 6, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(3, 2, 7, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(4, 2, 8, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(5, 2, 9, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(6, 2, 10, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(7, 2, 18, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(8, 2, 19, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(9, 2, 20, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(10, 2, 21, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(11, 2, 22, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(12, 2, 25, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(13, 2, 26, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(14, 2, 27, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(15, 2, 28, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(16, 2, 29, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(17, 2, 31, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(18, 2, 32, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(19, 2, 33, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(20, 2, 34, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(21, 2, 35, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(22, 2, 39, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(23, 2, 40, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(24, 2, 43, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(25, 2, 49, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(26, 2, 62, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(27, 2, 64, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(28, 2, 65, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(29, 3, 5, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(30, 3, 6, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(31, 3, 8, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(32, 3, 18, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(33, 3, 19, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(34, 3, 22, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(35, 3, 25, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(36, 3, 26, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(37, 3, 27, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(38, 3, 28, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(39, 3, 29, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(40, 3, 31, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(41, 3, 32, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(42, 3, 33, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(43, 3, 34, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(44, 3, 39, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(45, 4, 31, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(46, 4, 32, '2019-06-16 04:00:04', '2019-06-16 04:00:04'),
(47, 2, 63, '2019-06-16 04:00:05', '2019-06-16 04:00:05'),
(48, 2, 70, '2019-06-16 04:00:05', '2019-06-16 04:00:05'),
(49, 2, 71, '2019-06-16 04:00:06', '2019-06-16 04:00:06'),
(50, 2, 72, '2019-06-16 04:00:07', '2019-06-16 04:00:07'),
(51, 2, 73, '2019-06-16 04:00:07', '2019-06-16 04:00:07'),
(52, 2, 79, '2019-06-16 04:00:13', '2019-06-16 04:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `adminuser_roles_page_actions`
--

CREATE TABLE `adminuser_roles_page_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `access` enum('allow','deny') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminadmin_actions`
--
ALTER TABLE `adminadmin_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminadmin_controllers`
--
ALTER TABLE `adminadmin_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminadmin_logs`
--
ALTER TABLE `adminadmin_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminadmin_menu`
--
ALTER TABLE `adminadmin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminbackups`
--
ALTER TABLE `adminbackups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminblocks`
--
ALTER TABLE `adminblocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminblock_beacons`
--
ALTER TABLE `adminblock_beacons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminblock_category`
--
ALTER TABLE `adminblock_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminblock_form_rules`
--
ALTER TABLE `adminblock_form_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminblock_repeaters`
--
ALTER TABLE `adminblock_repeaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminblock_selectopts`
--
ALTER TABLE `adminblock_selectopts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminblock_video_cache`
--
ALTER TABLE `adminblock_video_cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminform_submissions`
--
ALTER TABLE `adminform_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlanguages`
--
ALTER TABLE `adminlanguages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmenus`
--
ALTER TABLE `adminmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmenu_items`
--
ALTER TABLE `adminmenu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmigrations`
--
ALTER TABLE `adminmigrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpages`
--
ALTER TABLE `adminpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_blocks`
--
ALTER TABLE `adminpage_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_blocks_default`
--
ALTER TABLE `adminpage_blocks_default`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_blocks_repeater_data`
--
ALTER TABLE `adminpage_blocks_repeater_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_blocks_repeater_rows`
--
ALTER TABLE `adminpage_blocks_repeater_rows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_group`
--
ALTER TABLE `adminpage_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_group_attributes`
--
ALTER TABLE `adminpage_group_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_group_pages`
--
ALTER TABLE `adminpage_group_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_lang`
--
ALTER TABLE `adminpage_lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_publish_requests`
--
ALTER TABLE `adminpage_publish_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_redirects`
--
ALTER TABLE `adminpage_redirects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_search_data`
--
ALTER TABLE `adminpage_search_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_search_log`
--
ALTER TABLE `adminpage_search_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_versions`
--
ALTER TABLE `adminpage_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage_versions_schedule`
--
ALTER TABLE `adminpage_versions_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsettings`
--
ALTER TABLE `adminsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintemplates`
--
ALTER TABLE `admintemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminthemes`
--
ALTER TABLE `adminthemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintheme_blocks`
--
ALTER TABLE `admintheme_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintheme_templates`
--
ALTER TABLE `admintheme_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintheme_template_blocks`
--
ALTER TABLE `admintheme_template_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminuser_roles`
--
ALTER TABLE `adminuser_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminuser_roles_actions`
--
ALTER TABLE `adminuser_roles_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminuser_roles_page_actions`
--
ALTER TABLE `adminuser_roles_page_actions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminadmin_actions`
--
ALTER TABLE `adminadmin_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `adminadmin_controllers`
--
ALTER TABLE `adminadmin_controllers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `adminadmin_logs`
--
ALTER TABLE `adminadmin_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `adminadmin_menu`
--
ALTER TABLE `adminadmin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `adminbackups`
--
ALTER TABLE `adminbackups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminblocks`
--
ALTER TABLE `adminblocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `adminblock_beacons`
--
ALTER TABLE `adminblock_beacons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminblock_category`
--
ALTER TABLE `adminblock_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adminblock_form_rules`
--
ALTER TABLE `adminblock_form_rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminblock_repeaters`
--
ALTER TABLE `adminblock_repeaters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adminblock_selectopts`
--
ALTER TABLE `adminblock_selectopts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminblock_video_cache`
--
ALTER TABLE `adminblock_video_cache`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminform_submissions`
--
ALTER TABLE `adminform_submissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminlanguages`
--
ALTER TABLE `adminlanguages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminmenus`
--
ALTER TABLE `adminmenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminmenu_items`
--
ALTER TABLE `adminmenu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminmigrations`
--
ALTER TABLE `adminmigrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `adminpages`
--
ALTER TABLE `adminpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminpage_blocks`
--
ALTER TABLE `adminpage_blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminpage_blocks_default`
--
ALTER TABLE `adminpage_blocks_default`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `adminpage_blocks_repeater_data`
--
ALTER TABLE `adminpage_blocks_repeater_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `adminpage_blocks_repeater_rows`
--
ALTER TABLE `adminpage_blocks_repeater_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `adminpage_group`
--
ALTER TABLE `adminpage_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminpage_group_attributes`
--
ALTER TABLE `adminpage_group_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminpage_group_pages`
--
ALTER TABLE `adminpage_group_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminpage_lang`
--
ALTER TABLE `adminpage_lang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminpage_publish_requests`
--
ALTER TABLE `adminpage_publish_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminpage_redirects`
--
ALTER TABLE `adminpage_redirects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminpage_search_data`
--
ALTER TABLE `adminpage_search_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminpage_search_log`
--
ALTER TABLE `adminpage_search_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminpage_versions`
--
ALTER TABLE `adminpage_versions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adminpage_versions_schedule`
--
ALTER TABLE `adminpage_versions_schedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminsettings`
--
ALTER TABLE `adminsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admintemplates`
--
ALTER TABLE `admintemplates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `adminthemes`
--
ALTER TABLE `adminthemes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admintheme_blocks`
--
ALTER TABLE `admintheme_blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admintheme_templates`
--
ALTER TABLE `admintheme_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admintheme_template_blocks`
--
ALTER TABLE `admintheme_template_blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminuser_roles`
--
ALTER TABLE `adminuser_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminuser_roles_actions`
--
ALTER TABLE `adminuser_roles_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `adminuser_roles_page_actions`
--
ALTER TABLE `adminuser_roles_page_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
