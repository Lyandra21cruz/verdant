-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/02/2025 às 19:39
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `verdant`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id_avaliacao` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `nota` tinyint(5) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinhos`
--

CREATE TABLE `carrinhos` (
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `carrinhos`
--

INSERT INTO `carrinhos` (`id_usuario`, `id_produto`, `quantidade`) VALUES
(1, 3, 1),
(1, 13, 1),
(1, 3, 1),
(1, 3, 1),
(1, 3, 1),
(1, 6, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `produtos` text NOT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `descricao_produto` text NOT NULL,
  `imagem_produto` varchar(255) NOT NULL,
  `preco_produto` decimal(6,2) NOT NULL,
  `estoque_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_usuario`, `nome_produto`, `descricao_produto`, `imagem_produto`, `preco_produto`, `estoque_produto`) VALUES
(3, 1, 'Bolsa Sustentável', 'Feita com materiais reciclados, essa bolsa é ideal para quem busca praticidade e sustentabilidade no dia a dia.', '67bf0059638fe.jpg', 42.45, 50),
(5, 1, 'Vela Dalit', 'Vela artesanal feita com cera natural e aromas relaxantes. Perfeita para criar um ambiente                         aconchegante.', '67bf01d550bc0.jpg', 17.50, 50),
(6, 1, 'Mini Estufa', 'Ideal para quem deseja cultivar plantas em casa com controle de temperatura e umidade.', '67bf01fda629c.jpg', 2500.00, 50),
(7, 1, 'Lápis de Semente', 'Após o uso, plante o lápis e veja crescer uma linda planta. Feito com materiais                             biodegradáveis.', '67bf04af9dd4f.jpg', 1.05, 50),
(8, 1, 'Kit Auto Cuidado Naturalvegan', 'Kit especial com produtos naturais para um autocuidado completo. Livre de químicos                             agressivos.', '67bf05129b00e.jpg', 50.00, 50),
(9, 1, 'Kit Sabonete e Bucha Natural', 'Sabonete artesanal e bucha vegetal para um banho relaxante e ecológico.', '67bf0534471b6.jpg', 37.00, 50),
(10, 1, 'Bolsa Ecológica', 'Bolsa feita de algodão reciclado, perfeita para substituir sacolas plásticas.', '67bf0d825ea67.jpg', 32.45, 50),
(11, 1, 'Bolsa Térmica', 'Bolsa sustentável com isolamento térmico para conservar alimentos e bebidas.', '67bf0da066c39.jpg', 32.45, 50),
(12, 1, 'Bolsa de Juta', 'Produzida com fibras naturais, resistente e estilosa para o dia a dia.', '67bf0dbd94b78.jpg', 32.45, 50),
(13, 1, 'Bolsa de Algodão Cru', 'Bolsa versátil e sustentável, feita de algodão natural sem tingimentos químicos.', '67bf0e32075ec.jpg', 32.45, 50),
(14, 1, 'Bolsa de Papel Kraft', 'Bolsa ecológica biodegradável, ideal para pequenas compras e presentes.', '67bf0e4d4aea8.jpg', 32.45, 50),
(15, 1, 'Bolsa Compacta Reutilizável', 'Prática e dobrável, cabe no bolso e substitui sacolas plásticas descartáveis.', '67bf0e647d743.jpg', 32.45, 50);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `vendedor` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email`, `senha`, `vendedor`, `admin`) VALUES
(1, 'Admin', 'admin@gmail.com', 'verdant123', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedor` int(11) NOT NULL,
  `nome_vendedor` varchar(255) NOT NULL,
  `email_vendedor` varchar(255) NOT NULL,
  `produtos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `id_avaliacao_cliente` (`id_cliente`),
  ADD KEY `id_avaliacao_produto` (`id_produto`);

--
-- Índices de tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD KEY `id_carrinho_usuario` (`id_usuario`),
  ADD KEY `id_produtos` (`id_produto`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD KEY `vendedores_ibfk_1` (`id_vendedor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `id_avaliacao_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_avaliacao_produto` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD CONSTRAINT `id_carrinho_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_produtos` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_vendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `vendedores`
--
ALTER TABLE `vendedores`
  ADD CONSTRAINT `vendedores_ibfk_1` FOREIGN KEY (`id_vendedor`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
