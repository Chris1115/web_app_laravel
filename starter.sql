create database bisniscap;

use bisniscap

insert into courses (names, description) values ('Business Model Canvas', 'DI dalam course ini, anda akan mempelajari secara lebih mendetail sebuah metode penentuan model bisnis yang menjadi dasar kerangka dalam sebuah bisnis');

insert into news (headline, content) values ('Biofarma Siap Menerima Investasi dari Bill Gates', 'Bill Gates mengapresiasi upaya Indonesia dalam menekan penyebaran pandemi Covid-19 dengan cepat, serta meratanya program vaksinasi nasional sehingga indikator pandemi di Indonesia menurun drastis.');

insert into forums (title,question) values ('Apa perbedaan signifikan antara UMKM dan start-up?','Banyak orang masih bingung dalam membedakan sebuah bisnis tergolong UMKM atau start-up. Apa pendapat mu mengenai hal ini?');

INSERT INTO `classes` (`id`,  `course_id`, `mentor`, `schedule`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Rudi.spd', 'Mon, 14.00 - 16.30', NULL, NULL);

INSERT INTO `classes` (`id`,  `course_id`, `mentor`, `schedule`, `created_at`, `updated_at`) VALUES (NULL, '2', 'Rudi.spd', 'Mon, 14.00 - 16.30', NULL, NULL);
