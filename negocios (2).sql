-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2023 a las 19:21:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `negocios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_10_30_100000_create_productos_table', 1),
(5, '2022_10_30_200000_create_negocios_table', 1),
(6, '2022_10_30_300000_create_propietarios_table', 1),
(7, '2022_10_30_400000_create_negocios_productos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE `negocios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_negocio` varchar(255) NOT NULL,
  `informacion_negocio` longtext NOT NULL,
  `ruc_negocio` varchar(255) NOT NULL,
  `telefono_negocio` varchar(255) NOT NULL,
  `direccion_negocio` varchar(255) NOT NULL,
  `correo_negocio` varchar(255) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `imagen1` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL,
  `imagen3` varchar(255) DEFAULT NULL,
  `video1` varchar(255) DEFAULT NULL,
  `video2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `negocios`
--

INSERT INTO `negocios` (`id`, `nombre_negocio`, `informacion_negocio`, `ruc_negocio`, `telefono_negocio`, `direccion_negocio`, `correo_negocio`, `nombre_producto`, `imagen1`, `imagen2`, `imagen3`, `video1`, `video2`, `created_at`, `updated_at`) VALUES
(22, 'Foto estudio Bohemia', '¿NECESITAS GUARDAR TUS RECUERDOS? 👨‍👩‍👧 FOTO ESTUDIO “BOHEMIA”', 'N/A', '0991831661', 'Parque Central Tambillo, Calle 13 de julio S/N frente a la iglesia parroquial.', 'Bohemia@gmail.com', '- Revelado e impresión de fotografías de cualquier medio digital. - Collages - Restauraciones fotográficas. - Colorizaciones - Tarjetas de invitación  - Calendarios  - Foto bordes', '1674751201Sin título-1.png', '1674751201fo2.png', '16747512012-100.jpg', 'https://youtu.be/5ag5NsEFQmc', NULL, '2023-01-26 21:40:01', '2023-01-26 21:40:01'),
(24, 'Heladería Dulcinea', 'Ya existiendo 5 años, abrimos desde las 9 de la mañana, nos epecializamos en postres', 'N/AA', '0000000000', 'Garcia Moreno y Carlos Brito', 'Dulcinea@gmail.com', '-Espumilla-Choco bananas-Flan-Gelatina-Piña hawaiana-Helados', '1674756709Sin título-1.png', '16747567091d.jpg', '16747567092d.jpg', 'https://www.youtube.com/watch?v=xnd6OC0TPHo', NULL, '2023-01-26 23:11:49', '2023-01-26 23:11:49'),
(25, 'El Rincon de la Empanada', 'Llevamos existiendo desde hace 2 años, nuestro negocio surgio a la poca escasez de empanadas por tambillo', 'N/AAA', '0000000000', 'Tambillo-Frente a la farmacia comunitaria', 'Empanada@gmail.com', 'Empanda de Pollo-Empanda de Carne Mechada-Empanda de Queso-Humitas', '1674757176Sin título-1.png', '1674757176vin2.jpg', '1674757176vin3.jpg', 'https://www.youtube.com/watch?v=AfYrAFwMjLo', NULL, '2023-01-26 23:19:36', '2023-01-26 23:19:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios_productos`
--

CREATE TABLE `negocios_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED DEFAULT NULL,
  `negocio_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `informacion_producto` longtext NOT NULL,
  `valor_producto` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `informacion_producto`, `valor_producto`, `created_at`, `updated_at`) VALUES
(1, 'Prueba_1', 'aaadassdad', '3.00', '2023-01-25 19:43:03', '2023-01-25 19:43:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_propietario` varchar(255) NOT NULL,
  `apellido_propietario` varchar(255) NOT NULL,
  `cedula_propietario` varchar(13) NOT NULL,
  `telefono_propietario` varchar(255) NOT NULL,
  `correo_propietario` text NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `negocio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `negocios`
--
ALTER TABLE `negocios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `negocios_ruc_negocio_unique` (`ruc_negocio`),
  ADD UNIQUE KEY `negocios_correo_negocio_unique` (`correo_negocio`);

--
-- Indices de la tabla `negocios_productos`
--
ALTER TABLE `negocios_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `negocios_productos_producto_id_foreign` (`producto_id`),
  ADD KEY `negocios_productos_negocio_id_foreign` (`negocio_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `propietarios_id_unique` (`id`),
  ADD UNIQUE KEY `propietarios_cedula_propietario_unique` (`cedula_propietario`),
  ADD UNIQUE KEY `propietarios_correo_propietario_unique` (`correo_propietario`) USING HASH,
  ADD KEY `propietarios_negocio_id_foreign` (`negocio_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `negocios`
--
ALTER TABLE `negocios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `negocios_productos`
--
ALTER TABLE `negocios_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `negocios_productos`
--
ALTER TABLE `negocios_productos`
  ADD CONSTRAINT `negocios_productos_negocio_id_foreign` FOREIGN KEY (`negocio_id`) REFERENCES `negocios` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `negocios_productos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD CONSTRAINT `propietarios_negocio_id_foreign` FOREIGN KEY (`negocio_id`) REFERENCES `negocios` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
