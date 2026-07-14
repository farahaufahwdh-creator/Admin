<?php

namespace Config;

class AdminTables
{
    /**
     * Peta semua tabel yang bisa dikelola lewat panel admin.
     * type 'image' artinya kolom itu berupa file upload gambar.
     */
    public static function all(): array
    {
        return [
            'hero_slides' => [
                'label'     => 'Hero Slides',
                'pk'        => 'id',
                'order_by'  => 'sort_order',
                'columns'   => [
                    'image'      => ['label' => 'Gambar', 'type' => 'image', 'folder' => 'hero'],
                    'eyebrow'    => ['label' => 'Eyebrow', 'type' => 'text'],
                    'title'      => ['label' => 'Judul', 'type' => 'text'],
                    'subtitle'   => ['label' => 'Subjudul', 'type' => 'textarea'],
                    'cta_text'   => ['label' => 'Teks Tombol', 'type' => 'text'],
                    'cta_link'   => ['label' => 'Link Tombol', 'type' => 'text'],
                    'sort_order' => ['label' => 'Urutan', 'type' => 'number'],
                ],
            ],
            'companies' => [
                'label'    => 'Companies',
                'pk'       => 'id',
                'order_by' => 'sort_order',
                'columns'  => [
                    'name'        => ['label' => 'Nama Perusahaan', 'type' => 'text'],
                    'icon'        => ['label' => 'Icon', 'type' => 'text'],
                    'description' => ['label' => 'Deskripsi', 'type' => 'textarea'],
                    'image'       => ['label' => 'Logo', 'type' => 'image', 'folder' => 'company'],
                    'link'        => ['label' => 'Link Website', 'type' => 'text'],
                    'sort_order'  => ['label' => 'Urutan', 'type' => 'number'],
                ],
            ],
            'services' => [
                'label'    => 'Services',
                'pk'       => 'id',
                'order_by' => 'sort_order',
                'columns'  => [
                    'title'       => ['label' => 'Judul', 'type' => 'text'],
                    'icon'        => ['label' => 'Icon', 'type' => 'text'],
                    'description' => ['label' => 'Deskripsi', 'type' => 'textarea'],
                    'image1'      => ['label' => 'Gambar 1', 'type' => 'image', 'folder' => 'service'],
                    'image2'      => ['label' => 'Gambar 2', 'type' => 'image', 'folder' => 'service'],
                    'image3'      => ['label' => 'Gambar 3', 'type' => 'image', 'folder' => 'service'],
                    'sort_order'  => ['label' => 'Urutan', 'type' => 'number'],
                ],
            ],
            'about_items' => [
                'label'    => 'About Items',
                'pk'       => 'id',
                'order_by' => 'sort_order',
                'columns'  => [
                    'label'      => ['label' => 'Label', 'type' => 'text'],
                    'name'       => ['label' => 'Nama', 'type' => 'text'],
                    'icon'       => ['label' => 'Icon', 'type' => 'text'],
                    'image'      => ['label' => 'Gambar', 'type' => 'image', 'folder' => 'about'],
                    'text'       => ['label' => 'Teks', 'type' => 'textarea'],
                    'sort_order' => ['label' => 'Urutan', 'type' => 'number'],
                ],
            ],
            'gallery_photos' => [
                'label'    => 'Gallery Photos',
                'pk'       => 'id',
                'order_by' => 'sort_order',
                'columns'  => [
                    'image'      => ['label' => 'Gambar', 'type' => 'image', 'folder' => 'galerry'],
                    'caption'    => ['label' => 'Caption', 'type' => 'text'],
                    'sort_order' => ['label' => 'Urutan', 'type' => 'number'],
                ],
            ],
            'stats' => [
                'label'    => 'Stats',
                'pk'       => 'id',
                'order_by' => 'sort_order',
                'columns'  => [
                    'number'     => ['label' => 'Angka', 'type' => 'text'],
                    'label'      => ['label' => 'Label', 'type' => 'text'],
                    'sort_order' => ['label' => 'Urutan', 'type' => 'number'],
                ],
            ],
            'testimonials' => [
                'label'    => 'Testimonials',
                'pk'       => 'id',
                'order_by' => 'sort_order',
                'columns'  => [
                    'name'       => ['label' => 'Nama', 'type' => 'text'],
                    'text'       => ['label' => 'Testimoni', 'type' => 'textarea'],
                    'rating'     => ['label' => 'Rating (1-5)', 'type' => 'number'],
                    'sort_order' => ['label' => 'Urutan', 'type' => 'number'],
                ],
            ],
            'site_settings' => [
                'label'    => 'Site Settings',
                'pk'       => 'id',
                'order_by' => 'id',
                'single'   => true,
                'columns'  => [
                    'logo'                  => ['label' => 'Logo', 'type' => 'image', 'folder' => 'logo'],
                    'companies_subtitle'    => ['label' => 'Subtitle Companies', 'type' => 'textarea'],
                    'services_subtitle'     => ['label' => 'Subtitle Services', 'type' => 'textarea'],
                    'about_subtitle'        => ['label' => 'Subtitle About', 'type' => 'textarea'],
                    'gallery_subtitle'      => ['label' => 'Subtitle Gallery', 'type' => 'textarea'],
                    'address'               => ['label' => 'Alamat', 'type' => 'text'],
                    'phone'                 => ['label' => 'Telepon', 'type' => 'text'],
                    'phone_link'            => ['label' => 'Link Telepon', 'type' => 'text'],
                    'email'                 => ['label' => 'Email', 'type' => 'text'],
                    'maps_embed_url'        => ['label' => 'Maps Embed URL', 'type' => 'textarea'],
                    'maps_link_url'         => ['label' => 'Maps Link URL', 'type' => 'text'],
                    'ig_url'                => ['label' => 'Instagram', 'type' => 'text'],
                    'fb_url'                => ['label' => 'Facebook', 'type' => 'text'],
                    'yt_url'                => ['label' => 'YouTube', 'type' => 'text'],
                    'tiktok_url'            => ['label' => 'TikTok', 'type' => 'text'],
                    'whatsapp_number'       => ['label' => 'Nomor WhatsApp', 'type' => 'text'],
                    'whatsapp_message'      => ['label' => 'Pesan WhatsApp', 'type' => 'textarea'],
                    'footer_about'          => ['label' => 'Footer About', 'type' => 'textarea'],
                    'footer_copyright_name' => ['label' => 'Nama Copyright', 'type' => 'text'],
                ],
            ],
            'admins' => [
                'label'    => 'Admins',
                'pk'       => 'id',
                'order_by' => 'id',
                'columns'  => [
                    'username'     => ['label' => 'Username', 'type' => 'text'],
                    'password'     => ['label' => 'Password (kosongkan jika tidak diubah)', 'type' => 'password'],
                    'nama_lengkap' => ['label' => 'Nama Lengkap', 'type' => 'text'],
                ],
            ],
        ];
    }
}
