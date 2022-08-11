-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Ago-2022 às 04:10
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `base`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

DROP TABLE IF EXISTS `acessos`;
CREATE TABLE IF NOT EXISTS `acessos` (
  `nome` varchar(40) DEFAULT NULL,
  `acessos` int NOT NULL,
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`title`, `slug`, `body`, `id`) VALUES
('O que são buracos negros?', 'o-que-sao-buracos-negros', '<h2 class=\"subtitulo\">Características</h2>\r\n\r\n<p class=\"paragrafo\">\r\nA comunidade científica acredita que os buracos negros apresentem dimensões bastante variadas: os menores deles podem apresentar até mesmo o tamanho de um único átomo. Os maiores, por sua vez, podem ter raios de poucos quilômetros e milhões de vezes a massa do Sol. Algumas observações astronômicas já forneceram fortes evidências de que o centro de todas as grandes galáxias é ocupado por um buraco negro supermassivo. No centro da nossa galáxia, a Via Láctea, há um desses, e o seu nome é Sagittarius A.</p>\r\n\r\n<img class=\"imagem\" src=\"https://i.imgur.com/wIo6eTY.jpeg\"><br>\r\n\r\n\r\n<h2 class=\"subtitulo\">Os buracos negros “sugam” tudo ao seu redor?</h2>\r\n\r\n<p class=\"paragrafo\">\r\nOs buracos negros não “sugam” tudo que está a sua volta, no entanto, o seu campo gravitacional pode prender estrelas e planetas longínquos em órbitas espirais. Para que algo seja de fato “sugado” para o interior de um buraco negro, sem qualquer chance de fuga, é necessário que se estabeleça uma distância mínima ao seu centro, chamada de horizonte de eventos. A essa distância, a velocidade de escape, ou seja, a mínima velocidade para se escapar de um buraco negro, é maior que a própria velocidade da luz.</p>\r\n\r\n<h2 class=\"subtitulo\">Deformações no espaço-tempo</h2>\r\n\r\n<p class=\"paragrafo\">\r\nDe acordo com a teoria da Relatividade Geral, de Einstein, corpos de massas muito grandes produzem deformações no espaço-tempo. Essa deformação é a responsável pela grande aceleração gravitacional em direção ao centro desses corpos.</p>\r\n\r\n<img class=\"imagem\" src=\"https://i.imgur.com/VAKtEGm.jpeg\"><br>\r\n\r\n<p class=\"paragrafo\">\r\nAlém disso, a grande deformação do espaço-tempo torna-o curvo, de forma que a luz que se propaga nas proximidades dos buracos negros não percorre uma linha reta, mas sim uma trajetória curvilínea, pois o próprio espaço na região está deformado, dando origem a um fenômeno chamado de lente gravitacional.</p>\r\n\r\n<h2 class=\"subtitulo\">Aparência do buraco negro</h2>\r\n\r\n<p class=\"paragrafo\">\r\nA primeira foto de um buraco negro foi revelada no dia 10 de abril de 2019 pela Comissão Europeia. A descoberta foi feita pelo telescópio Event Horizon (EHT), um projeto que interligou oito telescópios e teve a colaboração de mais de 200 pesquisadores.</p>\r\n\r\n<p class=\"paragrafo\">\r\nO buraco negro revelado foi encontrado no centro da galáxia Messier 87, ou M87, a uma distância de 53 milhões de anos-luz da Terra. Ele mede 40 bilhões de quilômetros de diâmetro, três milhões de vezes o tamanho da Terra, e sua massa é 6,5 bilhões de vezes a do Sol.</p>\r\n\r\n<p class=\"paragrafo\">\r\nQuando um buraco negro atrai para si o conteúdo gasoso da atmosfera de uma estrela próxima, esse gás ganha grande aceleração centrípeta em torno do centro de massa do buraco negro. Com o aumento de velocidade de rotação, é formado o disco de acreção. O gás presente nas estrelas está repleto de cargas elétricas, que, quando aceleradas, produzem ondas eletromagnéticas de todos os comprimentos de onda possíveis, inclusive a luz visível. Dessa forma, em volta de um buraco negro em atividade, deve ser possível observar regiões muito luminosas, de formatos complexos, pois a grande gravidade local deforma o caminho percorrido pela luz emitida pelos gases em rotação.</p>\r\n\r\n<h2 class=\"subtitulo\">Buraco negro no centro da Via Láctea</h2>\r\n\r\n<p class=\"paragrafo\">\r\nNo dia 12 de maio de 2022, o conglomerado de telescópios Event Horizon revelou a foto mais nítida do buraco negro supermassivo localizado no centro da Via Láctea, o Sagitário A*. A sua distância com a Terra é de mais de 26 mil anos-luz. O feito envolveu mais de 350 pesquisadores e 11 telescópios espalhados por oito regiões do mundo.</p>\r\n\r\n<img class=\"imagem\" src=\"https://i.imgur.com/wIo6eTY.jpeg\"><br>\r\n\r\n<p class=\"paragrafo\">\r\nFoto do buraco negro no centro da Via Láctea</p>\r\n\r\n<img class=\"imagem\"src=\"https://i.imgur.com/ijQlvti.jpeg\"><br>\r\n<p class=\"paragrafo\">\r\nFoto do conglomerado Event Horizon\r\nCrédito: EHT Collaboration</p>', 2),
('Do I Wanna Know', 'do-i-wanna-know', 'ASDASDASD', 52),
('Planeta Deserto', 'planeta-deserto', '<h2 class=\"subtitulo\">Chegada</h2>\r\n<p class=\"paragrafo\">[D:200| 10:50] Na chegada ao planeta observado, pousamos para carregar a nave com energia solar, a qual por bondade do destino, havia em abundância na localidade, mas infelizmente talvez de mais para nossos corpos. </p>\r\n<img class=\"imagem\" src=\"../Images/Deserto/Deserto1.jpeg\">\r\n<p class=\"paragrafo\">[D:200| 17:33] Passamos por uma escassez de recursos não prevista, portanto me vi obrigado a caçar, mas o planeta não parecia colaborar, e nem haviam sinais de forma de vida nas proximidades. Formas de vida, inclusive as mais primitivas, tendem a deixar rastros, mas aqui não fomos capazes de encontra-los. </p>\r\n<p class=\"paragrafo\">[D:200| 20:21] O dia passa lento o que é bom para o acúmulo de energia dos propulsores e da nave em si, mas a sensação é de que estamos cozinhando lentamente, e esses trajes aquecem. Passaram-se praticamente uma tarde ou um dia desde que chegamos, mas o sol parece ter se movido centímetros, e nossas condições parecem piorar. </p>\r\n<h2 class=\"subtitulo\">Vida?</h2>\r\n<p class=\"paragrafo\">[D:201| 10:00] Após um período de sono e uma caçada mal sucedida, abastecemos nossos corpos com energia injetável, capsulas de nutrientes, e matamos a fome com simuladores de saciedade, é o necessário para sobreviver, e talvez a melhor opção da tripulação, mas visando a economia, já que não sabemos quanto tempo nos estenderemos aqui, a caça ainda é a melhor alternativa, e até o momento não houveram retornos. </p>\r\n<p class=\"paragrafo\">[D:201| 14:44] Vou a caça novamente, há cavernas nas proximidades, ainda não a exploramos, se há forma de vida que resista a estas temperaturas, provavelmente ela se esconde lá, e possivelmente compreenderemos com ela como sobreviver neste planeta, e se não aprendermos, usaremos ela para tal. </p>\r\n<p class=\"paragrafo\">[D:201| 15:00] Caverna alcançada. Lugar curiosamente acidentado para que não tenha sido visitado por nada que se mova, mas sem rastros concretos. </p>\r\n<img class=\"imagem\" src=\"../Images/Deserto/Cave1.jpeg\">\r\n<p class=\"paragrafo\">[D:201| 17:51] Há rastros aqui, uma espécie de muco ou visco translucido, mas nada concreto até o momento. Parece arriscado, mas sigo adentrando a estrutura rochosa. Voltar de mãos abanando apenas transferirá o perigo para depois de estarmos voando com a nave, portanto se tivermos um problema, pelo menos por enquanto temos mais chances de encontrar recursos numa atmosfera estável.</p>\r\n<p class=\"paragrafo\">[D:201| 19:04] Estou adentrando as cavernas por horas, está abafado, sinto que devo voltar, na dúvida, levo o visco encontrado no caminho. Os caminhos tortuosos deste lugar tendem a confundir minha mente, mas o maquinário deste traje dificilmente será enganado.</p>\r\n<img class=\"imagem\" src=\"../Images/Deserto/Cave2.jpeg\">\r\n<p class=\"paragrafo\">[D:201| 19:56] Decido voltar, não sinto seguro em continuar nessa situação. Nas regiões mais profundas haviam fendas de vapor, mas não sei sequer se era vapor de água, levarei um pouco também. Na pior das hipóteses, voltaremos para buscar este elemento. Ainda ouço os sons delas, e apesar de razoavelmente armado, pela provável desvantagem do lugar em que me encontro, rezo para que sejam apenas alucinações auditivas pregando-me peças. </p>', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
