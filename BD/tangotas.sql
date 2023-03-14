-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-06-2014 a las 20:40:31
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `tangotas`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categorias`
-- 

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(39) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (1, 'Salvaje', 'asdsadsda');
INSERT INTO `categorias` VALUES (2, 'Clasica', 'adsdsadsa');
INSERT INTO `categorias` VALUES (3, 'Experimental', 'asddasdassad');
INSERT INTO `categorias` VALUES (4, 'Sexi', 'asddsaasddas');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `comentarios`
-- 

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL default 'despublicado',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- 
-- Volcar la base de datos para la tabla `comentarios`
-- 

INSERT INTO `comentarios` VALUES (1, 'Mi rey', 'lalitorams@gmail.com', 'CHINGON', 'fsddsfdffsdsffddfsl de lalito rams esta chingony que la venta de las tangas es un negocio millonario', '24332432432432', 'despublicado');
INSERT INTO `comentarios` VALUES (22, 'Mi rey', 'lalitorams@gmail.com', 'xcvcxvxcvxcv', 'vcvccxvcxvcxvcxvcxvcxv', '03/06/2014', 'despublicado');
INSERT INTO `comentarios` VALUES (9, 'Administrador', 'admin@admin.com', 'asdsadsad', 'asdsadsadsadsad', '03/06/2014', 'despublicado');
INSERT INTO `comentarios` VALUES (10, 'Administrador', 'admin@admin.com', 'sfddfdsfdsf', 'sdfdsf', '03/06/2014', 'despublicado');
INSERT INTO `comentarios` VALUES (21, 'Administrador', 'lalitorams@gmail.com', '', 'hfhdfgfdgfdgfdfdg', '03/06/2014', 'despublicado');
INSERT INTO `comentarios` VALUES (14, 'Administrador', 'admin@admin.com', 'lkjkl', 'kjlklj', '03/06/2014', '');
INSERT INTO `comentarios` VALUES (15, 'Administrador', 'admin@admin.com', 'jggjhhjg', 'hjghjgjh', '03/06/2014', '');
INSERT INTO `comentarios` VALUES (16, 'Administrador', 'admin@admin.com', 'qqqq', 'qqqq', '03/06/2014', 'despublicado');
INSERT INTO `comentarios` VALUES (17, 'Administrador', 'admin@admin.com', 'ddd', 'ddd', '03/06/2014', '');
INSERT INTO `comentarios` VALUES (18, 'Administrador', 'admin@admin.com', 'rrr', 'rrr', '03/06/2014', '');
INSERT INTO `comentarios` VALUES (19, 'Administrador', 'admin@admin.com', 'dfgfgdfgdfgd', 'dfdfgfgd', '03/06/2014', '');
INSERT INTO `comentarios` VALUES (20, 'Administrador', 'admin@admin.com', '5555555', '55555', '03/06/2014', 'publicado');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `id` int(11) NOT NULL auto_increment,
  `imagen` varchar(100) NOT NULL,
  `nombreP` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `fecha` varchar(80) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (1, 'images/images.jpg', '33', '33', '44', '444', '21/Apr/2014', 'Sexi');
INSERT INTO `productos` VALUES (3, 'images/char.png', '22222', '222222', '22222', '222222', '21/Apr/2014', 'Clasica');
INSERT INTO `productos` VALUES (4, 'images/images.jpg', '22222', '222222', '22222', '222222', '21/Apr/2014', 'Clasica');
INSERT INTO `productos` VALUES (12, 'images/images.jpg', '22222', '222222', '22222', '222222', '21/Apr/2014', 'Clasica');
INSERT INTO `productos` VALUES (14, 'images/images.jpg', '22222', '222222', '22222', '222222', '21/Apr/2014', 'Clasica');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `imagen` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilegios` varchar(20) NOT NULL default 'Usuario',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (17, 'imagenes/Imagen2.png', 'CAGUABONGA', 'CAGUABONGA@hotmail.c', '3e8d115eb4b32b9e9479f387dbe14ee1', 'Usuario');
INSERT INTO `usuarios` VALUES (10, 'imagenes/viajes.jpg', 'Mi rey', 'lalitorams@gmail.com', '39c3ac84912e917f46f1baa034513376', 'Usuario');
INSERT INTO `usuarios` VALUES (5, 'administrador/usuarios/imagenes/559480_395880607181608_1693211699_n.jpg', 'lalito', 'lalo@gmail.com', '6a0897cfd163f9fb5bad', 'Usuario');
INSERT INTO `usuarios` VALUES (13, 'imagenes/Logo_Nuevo.png', 'asd', 'asd@dsa', 'f970e2767d0cfe75876ea857f92e319b', 'Administrador');
INSERT INTO `usuarios` VALUES (8, 'administrador/usuarios/imagenes/comentarios.png', 'edgar', 'edgar@hotmail.com', '6b1d24ff83a319070db9', 'Usuario');
INSERT INTO `usuarios` VALUES (9, 'administrador/usuarios/imagenes/559480_395880607181608_1693211699_n.jpg', 'fg@fg', 'fg@fg', '2d6208d366ca31f7203cb908c61366bb', 'Usuario');
INSERT INTO `usuarios` VALUES (11, 'administrador/usuarios/imagenes/char.png', 'Administrador', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrador');
INSERT INTO `usuarios` VALUES (14, 'imagenes/Logo_Nuevo.png', 'weew', 'wewe@ew', 'ff1ccf57e98c817df1efcd9fe44a8aeb', 'Administrador');
INSERT INTO `usuarios` VALUES (15, 'imagenes/Logo_Nuevo.png', 'sdf', 'as@sdasdasd', 'f970e2767d0cfe75876ea857f92e319b', 'Administrador');
INSERT INTO `usuarios` VALUES (16, 'imagenes/Imagen1.png', 'LALO', 'LALOS@GMAIL.COM', '14ff605e0a7841598772cec3dabe0393', 'Administrador');
