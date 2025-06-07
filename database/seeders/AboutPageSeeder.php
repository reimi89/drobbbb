<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    public function run()
    {
        AboutPage::create([
            'hero_title' => 'О компании',
            'hero_subtitle' => 'Лидер в производстве охотничьей дроби с 2010 года',
            'hero_image' => 'public\main',

            'mission_title' => 'Наша <span class="text-accent">миссия</span>',
            'mission_text' => '<p>Мы создаем высококачественные боеприпасы, которые помогают охотникам достигать выдающихся результатов. Наша продукция - это символ надежности, точности и уважения к традициям русской охоты.</p>',
            'mission_image' => 'about-page/mission.jpg',
            'features' => [
                [
                    'title' => 'Качество',
                    'description' => 'Строгий контроль на всех этапах производства'
                ],
                [
                    'title' => 'Традиции',
                    'description' => 'Сохранение лучших традиций оружейного дела'
                ]
            ],

            'history_items' => [
                [
                    'year' => '2010',
                    'title' => 'Основание компании',
                    'description' => 'Небольшая мастерская по производству охотничьей дроби в Волгограде'
                ],
                [
                    'year' => '2013',
                    'title' => 'Первое признание',
                    'description' => 'Наша продукция получила награду "Лучший отечественный продукт для охоты"'
                ],
                [
                    'year' => '2016',
                    'title' => 'Расширение производства',
                    'description' => 'Запуск новой линии по производству картечи и пуль'
                ]
            ],

            'production_title' => 'Наши <span class="text-accent">технологии</span>',
            'production_text' => '<p>Мы используем передовые технологии производства, сочетая современное оборудование с ручной проверкой каждого этапа. Наша дробь изготавливается из высококачественного свинца с добавлением сурьмы для увеличения твердости.</p>',
            'production_image' => 'about-page/production.jpg',
            'production_steps' => [
                [
                    'title' => 'Сырье',
                    'description' => 'Используем только сертифицированные материалы'
                ],
                [
                    'title' => 'Литье',
                    'description' => 'Точное литье с контролем температуры'
                ],
                [
                    'title' => 'Калибровка',
                    'description' => 'Сортировка по размеру с точностью до 0.01 мм'
                ],
                [
                    'title' => 'Контроль',
                    'description' => 'Многоступенчатая проверка качества'
                ]
            ],

            'team_title' => 'Наша <span class="text-accent">команда</span>',
            'team_subtitle' => 'Профессионалы с многолетним опытом в оружейном деле',
            'team_members' => [
                [
                    'name' => 'Сергей Волков',
                    'position' => 'Основатель, главный технолог',
                    'bio' => 'Опыт работы в оружейной промышленности более 25 лет. Автор 5 патентов в области производства боеприпасов.',
                    'photo' => 'about-page/team/team-1.jpg'
                ],
                [
                    'name' => 'Анна Смирнова',
                    'position' => 'Директор по качеству',
                    'bio' => 'Инженер-металлург с 15-летним стажем. Отвечает за контроль качества на всех этапах производства.',
                    'photo' => 'about-page/team/team-2.jpg'
                ]
            ],

            'certificates' => [
                [
                    'title' => 'Сертификат соответствия ГОСТ',
                    'image' => 'about-page/certificates/cert-1.jpg'
                ],
                [
                    'title' => 'Экологический сертификат',
                    'image' => 'about-page/certificates/cert-2.jpg'
                ]
            ],

            'cta_text' => 'Готовы сотрудничать с нами?',
            'cta_button_text' => 'Связаться с нами',
            'cta_button_link' => '/contacts'
        ]);
    }
}
