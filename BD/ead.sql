
-- Database: `ead`
-- --------------------------------------------------------

CREATE TABLE `andamentoaula` (
  `idAula` int(11) NOT NULL,
  `assistida` int(10) NOT NULL DEFAULT '0',
  `id_Aluno` int(11) NOT NULL,
  `nota` double DEFAULT '0'
)

CREATE TABLE `endereco` (
  `idEnd` int(11) NOT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `estado` varchar(80) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `complemento` varchar(80) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL
) 


CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `cpf` int(20) DEFAULT NULL,
  `d_nasc` date DEFAULT NULL,
  `profissao` varchar(80) DEFAULT NULL,
  `tel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
)

CREATE TABLE `resultado` (
  `idResp` int(11) NOT NULL,
  `resp1` tinyint(1) NOT NULL,
  `resp2` tinyint(1) NOT NULL DEFAULT '2',
  `resp3` tinyint(1) NOT NULL DEFAULT '2',
  `resp4` tinyint(1) NOT NULL DEFAULT '2',
  `resp5` tinyint(1) NOT NULL DEFAULT '2',
  `resp6` tinyint(1) NOT NULL DEFAULT '2',
  `resp7` tinyint(1) NOT NULL DEFAULT '2',
  `resp8` tinyint(1) NOT NULL DEFAULT '2',
  `resp9` tinyint(1) NOT NULL DEFAULT '2',
  `resp10` tinyint(1) NOT NULL DEFAULT '2'
)

INSERT INTO `resultado` (`idResp`, `resp1`, `resp2`, `resp3`, `resp4`, `resp5`, `resp6`, `resp7`, `resp8`, `resp9`, `resp10`) VALUES
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);


CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `dataCadastro` date NOT NULL
)

ALTER TABLE `andamentoaula`
  ADD PRIMARY KEY (`idAula`),
  ADD KEY `IDUSERR` (`id_Aluno`);

ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEnd`),
  ADD KEY `idUser` (`idUser`);

ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `IDUSER` (`id_user`);

ALTER TABLE `resultado`
  ADD PRIMARY KEY (`idResp`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `andamentoaula`
  MODIFY `idAula` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `endereco`
  MODIFY `idEnd` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `resultado`
  MODIFY `idResp` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `andamentoaula`
  ADD CONSTRAINT `IDUSERR` FOREIGN KEY (`id_Aluno`) REFERENCES `user` (`id`);

ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

ALTER TABLE `perfil`
  ADD CONSTRAINT `IDUSER` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;
