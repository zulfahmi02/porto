<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Skills
        $skills = [
            'Frontend' => [
                ['name' => 'React', 'icon_url' => 'https://cdn.simpleicons.org/react/61DAFB'],
                ['name' => 'TypeScript', 'icon_url' => 'https://cdn.simpleicons.org/typescript/3178C6'],
                ['name' => 'Next.js', 'icon_url' => 'https://cdn.simpleicons.org/nextdotjs/FFFFFF'],
                ['name' => 'Tailwind CSS', 'icon_url' => 'https://cdn.simpleicons.org/tailwindcss/06B6D4'],
            ],
            'Backend' => [
                ['name' => 'Node.js', 'icon_url' => 'https://cdn.simpleicons.org/nodedotjs/339933'],
                ['name' => 'Python', 'icon_url' => 'https://cdn.simpleicons.org/python/3776AB'],
                ['name' => 'FastAPI', 'icon_url' => 'https://cdn.simpleicons.org/fastapi/009688'],
            ],
            'Database' => [
                ['name' => 'MongoDB', 'icon_url' => 'https://cdn.simpleicons.org/mongodb/47A248'],
                ['name' => 'PostgreSQL', 'icon_url' => 'https://cdn.simpleicons.org/postgresql/4169E1'],
            ],
            'Tools & Other' => [
                ['name' => 'Git', 'icon_url' => 'https://cdn.simpleicons.org/git/F05032'],
                ['name' => 'Docker', 'icon_url' => 'https://cdn.simpleicons.org/docker/2496ED'],
                ['name' => 'AWS', 'icon_url' => 'https://cdn.simpleicons.org/amazonaws/FF9900'],
            ],
        ];

        foreach ($skills as $category => $items) {
            foreach ($items as $index => $item) {
                Skill::create([
                    'name' => $item['name'],
                    'icon_url' => $item['icon_url'],
                    'category' => $category,
                    'sort_order' => $index,
                ]);
            }
        }

        // Projects
        Project::create([
            'title' => 'SaaS Application Platform',
            'description' => 'Modern SaaS platform with user authentication, subscription management, and advanced reporting features.',
            'image' => 'project1.jpg', // Assuming these are copied to storage/app/public manually or exist in public/images
            'type' => 'Full Stack',
            'technologies' => ['React.js', 'TypeScript', 'PostgreSQL', 'Stripe'],
            'demo_url' => '#',
            'code_url' => '#',
            'sort_order' => 1,
        ]);

        Project::create([
            'title' => 'Task Management App',
            'description' => 'Collaborative task management tool with real-time updates, team collaboration features, and project tracking.',
            'image' => 'project2.jpg',
            'type' => 'Frontend',
            'technologies' => ['React', 'Firebase', 'MongoDB', 'WebSocket'],
            'demo_url' => '#',
            'code_url' => '#',
            'sort_order' => 2,
        ]);

        Project::create([
            'title' => 'Data Visualization Dashboard',
            'description' => 'Interactive data visualization dashboard with customizable charts, real-time data processing, and export capabilities.',
            'image' => 'project3.jpg',
            'type' => 'Frontend',
            'technologies' => ['React', 'D3.js', 'Python', 'FastAPI'],
            'demo_url' => '#',
            'code_url' => '#',
            'sort_order' => 3,
        ]);
    }
}
