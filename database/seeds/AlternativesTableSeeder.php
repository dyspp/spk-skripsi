<?php

use App\Models\Alternative;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AlternativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternative::create([
            'name'  =>  'Asus Vivobook S14 (S430FN) - (i3-8145U / 4GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus Vivobook S14 (S430FN) - (i3-8145U / 4GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-s14-s430fn.png',
            'brand' =>  'Asus',
            'price' =>  8200000,
            'processor' =>  'Intel Core i3-8145U, 2.1 GHz dual-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX150 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB  3.1 (x1) / USB 2.0 (x2) / HDMI /  Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Glass Touchpad',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S14-S430FN/'
        ]);
        
        Alternative::create([
            'name'  =>  'Asus Vivobook S14 (S430FN) - (i3-8145U / 8GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus Vivobook S14 (S430FN) - (i3-8145U / 8GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-s14-s430fn-2.png',
            'brand' =>  'Asus',
            'price' =>  8700000,
            'processor' =>  'Intel Core i3-8145U, 2.1 GHz dual-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX150 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB  3.1 (x1) / USB 2.0 (x2) / HDMI /  Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Glass Touchpad',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S14-S430FN/'
        ]);

        Alternative::create([
            'name'  =>  'Asus Vivobook S14 (S430FN) - (i5-8265U / 8GB-RAM / 1TB-HDD+256GB-SSD)',
            'slug'  =>  Str::slug('Asus Vivobook S14 (S430FN) - (i5-8265U / 8GB-RAM / 1TB-HDD+256GB-SSD)', '-'),
            'image' =>  'vivobook-s14-s430fn.png',
            'brand' =>  'Asus',
            'price' =>  10600000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX150 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 256 GB SATA SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB  3.1 (x1) / USB 2.0 (x2) / HDMI /  Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Glass Touchpad',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S14-S430FN/'
        ]);

        Alternative::create([
            'name'  =>  'Asus Vivobook S14 (S430FN) - (i5-8265U / 8GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus Vivobook S14 (S430FN) - (i5-8265U / 8GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-s14-s430fn-2.png',
            'brand' =>  'Asus',
            'price' =>  10800000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX150 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB  3.1 (x1) / USB 2.0 (x2) / HDMI /  Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Glass Touchpad',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S14-S430FN/'
        ]);

        Alternative::create([
            'name'  =>  'Asus Vivobook S14 (S430FN) - (i7-8565U / 8GB-RAM / 1TB-HDD+256GB-SSD)',
            'slug'  =>  Str::slug('Asus Vivobook S14 (S430FN) - (i7-8565U / 8GB-RAM / 1TB-HDD+256GB-SSD)', '-'),
            'image' =>  'vivobook-s14-s430fn.png',
            'brand' =>  'Asus',
            'price' =>  12300000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX150 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 256 GB SATA SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB  3.1 (x1) / USB 2.0 (x2) / HDMI /  Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Glass Touchpad',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S14-S430FN/'
        ]);

        Alternative::create([
            'name'  =>  'Asus Vivobook S14 (S430FN) - (i7-8565U / 8GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus Vivobook S14 (S430FN) - (i7-8565U / 8GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-s14-s430fn-2.png',
            'brand' =>  'Asus',
            'price' =>  12500000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX150 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB  3.1 (x1) / USB 2.0 (x2) / HDMI /  Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Glass Touchpad',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S14-S430FN/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook S13 (S330FA) - (i3-8145U / 256GB-SATA-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook S13 (S330FA) - (i3-8145U / 256GB-SATA-SSD)', '-'),
            'image' =>  'vivobook-s13-s330fa.png',
            'brand' =>  'Asus',
            'price' =>  7500000,
            'processor' =>  'Intel Core i3-8145U, 2.1 GHz dual-core, up to 3.9 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SATA SSD',
            'display'   =>  '13" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S13-S330FA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook S13 (S330FA) - (i3-8145U / 256GB-PCIe-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook S13 (S330FA) - (i3-8145U / 256GB-PCIe-SSD)', '-'),
            'image' =>  'vivobook-s13-s330fa.png',
            'brand' =>  'Asus',
            'price' =>  7700000,
            'processor' =>  'Intel Core i3-8145U, 2.1 GHz dual-core, up to 3.9 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB PCIe SSD',
            'display'   =>  '13" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S13-S330FA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook S13 (S330FA) - (i3-8145U / 512GB-PCIe-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook S13 (S330FA) - (i3-8145U / 512GB-PCIe-SSD)', '-'),
            'image' =>  'vivobook-s13-s330fa.png',
            'brand' =>  'Asus',
            'price' =>  8200000,
            'processor' =>  'Intel Core i3-8145U, 2.1 GHz dual-core, up to 3.9 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '13" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S13-S330FA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook S13 (S330FA) - (i5-8265U / 256GB-SATA-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook S13 (S330FA) - (i5-8265U / 256GB-SATA-SSD)', '-'),
            'image' =>  'vivobook-s13-s330fa.png',
            'brand' =>  'Asus',
            'price' =>  8900000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SATA SSD',
            'display'   =>  '13" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S13-S330FA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook S13 (S330FA) - (i5-8265U / 256GB-PCIe-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook S13 (S330FA) - (i5-8265U / 256GB-PCIe-SSD)', '-'),
            'image' =>  'vivobook-s13-s330fa.png',
            'brand' =>  'Asus',
            'price' =>  9100000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB PCIe SSD',
            'display'   =>  '13" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S13-S330FA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook S13 (S330FA) - (i5-8265U / 512GB-PCIe-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook S13 (S330FA) - (i5-8265U / 512GB-PCIe-SSD)', '-'),
            'image' =>  'vivobook-s13-s330fa.png',
            'brand' =>  'Asus',
            'price' =>  9600000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '13" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-S13-S330FA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix GL503GE (Hero Edition)',
            'slug'  =>  Str::slug('Asus ROG Strix GL503GE (Hero Edition)', '-'),
            'image' =>  'rog-strix-gl503ge-hero-edition.png',
            'brand' =>  'Asus',
            'price' =>  17800000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 Ti (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '128 GB M,2 NVME PCIe SSD (x2) / 1 TB SSHD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz',
            'unit_weight'   =>  2.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x3) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN / Mini DisplayPort',
            'features'  =>  'Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-Hero-Edition/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix G (G531GD) - (i5-9300H / 1TB-SSHD)',
            'slug'  =>  Str::slug('Asus ROG Strix G (G531GD) - (i5-9300H / 1TB-SSHD)', '-'),
            'image' =>  'rog-strix-g-g531gd-gt-gu.png',
            'brand' =>  'Asus',
            'price' =>  13800000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB SSHD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / Slim',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.2 C (x1) / USB 3.2 (x3) / HDMI / Audio Jack / LAN',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-G/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix G (G531GD) - (i5-9300H / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus ROG Strix G (G531GD) - (i5-9300H / 512GB-SSD)', '-'),
            'image' =>  'rog-strix-g-g531gd-gt-gu.png',
            'brand' =>  'Asus',
            'price' =>  14300000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / Slim',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.2 C (x1) / USB 3.2 (x3) / HDMI / Audio Jack / LAN',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-G/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix G (G531GD) - (i7-7950H / 1TB-SSHD)',
            'slug'  =>  Str::slug('Asus ROG Strix G (G531GD) - (i7-7950H / 1TB-SSHD)', '-'),
            'image' =>  'rog-strix-g-g531gd-gt-gu.png',
            'brand' =>  'Asus',
            'price' =>  15800000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB SSHD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / Slim IPS',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.2 C (x1) / USB 3.2 (x3) / HDMI / Audio Jack / LAN',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-G/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix G (G531GD) - (i7-7950H / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus ROG Strix G (G531GD) - (i7-7950H / 512GB-SSD)', '-'),
            'image' =>  'rog-strix-g-g531gd-gt-gu.png',
            'brand' =>  'Asus',
            'price' =>  16300000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / Slim IPS',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.2 C (x1) / USB 3.2 (x3) / HDMI / Audio Jack / LAN',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-G/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix G (G531GT) - (i5-9300H)',
            'slug'  =>  Str::slug('Asus ROG Strix G (G531GT) - (i5-9300H)', '-'),
            'image' =>  'rog-strix-g-g531gd-gt-gu.png',
            'brand' =>  'Asus',
            'price' =>  15800000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / Slim IPS',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.2 C (x1) / USB 3.2 (x3) / HDMI / Audio Jack / LAN',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-G/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix G (G531GT) - (i7-9750H)',
            'slug'  =>  Str::slug('Asus ROG Strix G (G531GT) - (i7-9750H)', '-'),
            'image' =>  'rog-strix-g-g531gd-gt-gu.png',
            'brand' =>  'Asus',
            'price' =>  17300000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / Slim IPS',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.2 C (x1) / USB 3.2 (x3) / HDMI / Audio Jack / LAN',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-G/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ROG Strix G (G531GU)',
            'slug'  =>  Str::slug('Asus ROG Strix G (G531GU)', '-'),
            'image' =>  'rog-strix-g-g531gd-gt-gu.png',
            'brand' =>  'Asus',
            'price' =>  18300000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1660 Ti (6 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / Slim IPS',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.2 C (x1) / USB 3.2 (x3) / HDMI / Audio Jack / LAN',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://www.asus.com/id/Laptops/ROG-Strix-G/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DD (Gold Steel) - (1TB-HDD)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DD (Gold Steel) - (1TB-HDD)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  9800000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (3 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DD (Gold Steel) - (512GB-SSD)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DD (Gold Steel) - (512GB-SSD)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  10600000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (3 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DT (Stealth Black)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DT (Stealth Black)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  11300000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-5-3550H / 1TB-HDD / FHD-60Hz)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-5-3550H / 1TB-HDD / FHD-60Hz)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  10300000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-5-3550H / 1TB-HDD / FHD-120Hz)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-5-3550H / 1TB-HDD / FHD-120Hz)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  10500000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-5-3550H / 512GB-SSD / FHD-120Hz)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-5-3550H / 512GB-SSD / FHD-120Hz)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  11800000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-7-3750H / 512GB-SSD / FHD-120Hz)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DT (Gold Steel) - (Ryzen-7-3750H / 512GB-SSD / FHD-120Hz)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  13800000,
            'processor' =>  'AMD Ryzen 7 3750H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DU (Gold Steel)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DU (Gold Steel)', '-'),
            'image' =>  'tuf-gaming-fx505dd-dt-du.png',
            'brand' =>  'Asus',
            'price' =>  15300000,
            'processor' =>  'AMD Ryzen 7 3750H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1660 Ti (6 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DD-DT-DU/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DY (Gold Steel) - (1TB-HDD)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DY (Gold Steel) - (1TB-HDD)', '-'),
            'image' =>  'tuf-gaming-fx505dy.png',
            'brand' =>  'Asus',
            'price' =>  9800000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon RX 560X (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DY/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DY (Gold Steel) - (512GB-SSD)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DY (Gold Steel) - (512GB-SSD)', '-'),
            'image' =>  'tuf-gaming-fx505dy.png',
            'brand' =>  'Asus',
            'price' =>  10800000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon RX 560X (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DY/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505DV (Gold Steel)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505DV (Gold Steel)', '-'),
            'image' =>  'tuf-gaming-fx505dv.png',
            'brand' =>  'Asus',
            'price' =>  17800000,
            'processor' =>  'AMD Ryzen 7 3750H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce RTX 2060 (6 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz / NanoEdge',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam  / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505DV/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook Pro F560UD',
            'slug'  =>  Str::slug('Asus VivoBook Pro F560UD', '-'),
            'image' =>  'vivobook-f560ud.png',
            'brand' =>  'Asus',
            'price' =>  9600000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://www.asus.com/id/Laptops/F560UD/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GD (Gold Steel)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GD (Gold Steel)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-gold-steel.png',
            'brand' =>  'Asus',
            'price' =>  15000000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GD (Red Fusion) - (i7-8750H)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GD (Red Fusion) - (i7-8750H)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-red-fusion.png',
            'brand' =>  'Asus',
            'price' =>  14300000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GD (Red Fusion) - (i5-8300H)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GD (Red Fusion) - (i5-8300H)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-red-fusion.png',
            'brand' =>  'Asus',
            'price' =>  12300000,
            'processor' =>  'Intel Core i5-8300H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GE (Gold Steel) - (i7-8750H / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GE (Gold Steel) - (i7-8750H / 512GB-SSD)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-gold-steel.png',
            'brand' =>  'Asus',
            'price' =>  16500000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 Ti (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GE (Gold Steel) - (i7-8750H / 1TB-HDD+128GB-SSD)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GE (Gold Steel) - (i7-8750H / 1TB-HDD+128GB-SSD)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-gold-steel.png',
            'brand' =>  'Asus',
            'price' =>  16300000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 Ti (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '128 GB PCIe SDD / 1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GE (Red Fusion)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GE (Red Fusion)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-red-fusion.png',
            'brand' =>  'Asus',
            'price' =>  15600000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 Ti (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '128 GB PCIe SDD / 1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GE (Gold Steel) - (i5-8300H / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GE (Gold Steel) - (i5-8300H / 1TB-HDD)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-gold-steel.png',
            'brand' =>  'Asus',
            'price' =>  13300000,
            'processor' =>  'Intel Core i5-8300H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 Ti (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus TUF Gaming FX505GM (Red Fusion)',
            'slug'  =>  Str::slug('Asus TUF Gaming FX505GM (Red Fusion)', '-'),
            'image' =>  'tuf-gaming-fx505gd-ge-gm-gold-steel.png',
            'brand' =>  'Asus',
            'price' =>  17800000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1060 (6 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (RGB) / Kensington Lock',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-TUF-Gaming-FX505/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook E402BA',
            'slug'  =>  Str::slug('Asus VivoBook E402BA', '-'),
            'image' =>  'vivobook-e402ba.png',
            'brand' =>  'Asus',
            'price' =>  3650000,
            'processor' =>  'AMD A4-9125, 2.3 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'AMD Radeon R3 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '500 GB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 C (x1) / USB 2.0 (x1) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-VivoBook-E402BA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook E203MAH - (4GB-RAM)',
            'slug'  =>  Str::slug('Asus VivoBook E203MAH - (4GB-RAM)', '-'),
            'image' =>  'vivobook-e203mah.png',
            'brand' =>  'Asus',
            'price' =>  3700000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel UHD Graphics 600 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '500 GB HDD',
            'display'   =>  '11.6" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 C (x1) / USB 3.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-E203MAH/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook E203MAH - (2GB-RAM)',
            'slug'  =>  Str::slug('Asus VivoBook E203MAH - (2GB-RAM)', '-'),
            'image' =>  'vivobook-e203mah.png',
            'brand' =>  'Asus',
            'price' =>  3400000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel UHD Graphics 600 (System Shared)',
            'ram'   =>  2,
            'storage'   =>  '500 GB HDD',
            'display'   =>  '11.6" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 C (x1) / USB 3.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-E203MAH/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407MA - (1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A407MA - (1TB-HDD)', '-'),
            'image' =>  'vivobook-a407ma.png',
            'brand' =>  'Asus',
            'price' =>  3900000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel UHD Graphics 600 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI / MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407MA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407MA - (256GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A407MA - (256GB-SSD)', '-'),
            'image' =>  'vivobook-a407ma.png',
            'brand' =>  'Asus',
            'price' =>  4050000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel UHD Graphics 600 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SATA M.2 SSD',
            'display'   =>  '14" / HD / 768p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI / MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407MA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UA - (256GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UA - (256GB-SSD)', '-'),
            'image' =>  'vivobook-a407ua.png',
            'brand' =>  'Asus',
            'price' =>  6300000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SATA M.2 SSD',
            'display'   =>  '14" / HD / 768p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI / MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UA - (1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UA - (1TB-HDD)', '-'),
            'image' =>  'vivobook-a407ua.png',
            'brand' =>  'Asus',
            'price' =>  6000000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI / MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook X441UB - (i5-8250H)',
            'slug'  =>  Str::slug('Asus VivoBook X441UB - (i5-8250H)', '-'),
            'image' =>  'vivobook-x441ub.png',
            'brand' =>  'Asus',
            'price' =>  8100000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'Nvidia GeForce MX110 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.75,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 C (x1) / USB 2.0 (x1) / HDMI / VGA Port / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Optical Driver',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-X441UB/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook X441UB - (i3-7020U)',
            'slug'  =>  Str::slug('Asus VivoBook X441UB - (i3-7020U)', '-'),
            'image' =>  'vivobook-x441ub.png',
            'brand' =>  'Asus',
            'price' =>  6650000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Nvidia GeForce MX110 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.75,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 C (x1) / USB 2.0 (x1) / HDMI / VGA Port / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Optical Driver',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-X441UB/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBoox X441BA - (AMD-A9-9425)',
            'slug'  =>  Str::slug('Asus VivoBoox X441BA - (AMD-A9-9425)', '-'),
            'image' =>  'vivobook-x441ba.png',
            'brand' =>  'Asus',
            'price' =>  4900000,
            'processor' =>  'AMD A9-9425, 3.1 GHz dual-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon R5 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.75,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 C (x1) / USB 2.0 (x1) / HDMI / VGA Port / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Optical Driver',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-X441BA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBoox X441BA - (AMD-A4-9125)',
            'slug'  =>  Str::slug('Asus VivoBoox X441BA - (AMD-A4-9125)', '-'),
            'image' =>  'vivobook-x441ba.png',
            'brand' =>  'Asus',
            'price' =>  3800000,
            'processor' =>  'AMD A4-9125, 2.3 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'AMD Radeon R3 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.75,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 C (x1) / USB 2.0 (x1) / HDMI / VGA Port / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Optical Driver',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-X441BA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UF - (i7-8550U / 256GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UF - (i7-8550U / 256GB-SSD)', '-'),
            'image' =>  'vivobook-a407uf.png',
            'brand' =>  'Asus',
            'price' =>  11900000,
            'processor' =>  'Intel Core i7-8550U, 1.8 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB SATA SSD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI  / Audio Jack/ MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UF/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UF - (i7-8550U / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UF - (i7-8550U / 1TB-HDD)', '-'),
            'image' =>  'vivobook-a407uf.png',
            'brand' =>  'Asus',
            'price' =>  11600000,
            'processor' =>  'Intel Core i7-8550U, 1.8 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI  / Audio Jack/ MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UF/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UF - (i5-8250U / 256GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UF - (i5-8250U / 256GB-SSD)', '-'),
            'image' =>  'vivobook-a407uf.png',
            'brand' =>  'Asus',
            'price' =>  9200000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SATA SSD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI  / Audio Jack/ MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UF/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UF - (i5-8250U / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UF - (i5-8250U / 1TB-HDD)', '-'),
            'image' =>  'vivobook-a407uf.png',
            'brand' =>  'Asus',
            'price' =>  8800000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI  / Audio Jack/ MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UF/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UF - (i3-7020U / 256GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UF - (i3-7020U / 256GB-SSD)', '-'),
            'image' =>  'vivobook-a407uf.png',
            'brand' =>  'Asus',
            'price' =>  7100000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SATA SSD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI  / Audio Jack/ MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UF/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A407UF - (i3-7020U / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A407UF - (i3-7020U / 1TB-HDD)', '-'),
            'image' =>  'vivobook-a407uf.png',
            'brand' =>  'Asus',
            'price' =>  6800000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI  / Audio Jack/ MicroSD Card Reader / Multi-Format Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-A407UF/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A409FJ - (i5-8265U / 4GB-RAM / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A409FJ - (i5-8265U / 4GB-RAM / 1TB-HDD)', '-'),
            'image' =>  'vivobook-a409fj.png',
            'brand' =>  'Asus',
            'price' =>  8300000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-X409FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A409FJ - (i5-8265U / 4GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A409FJ - (i5-8265U / 4GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-a409fj.png',
            'brand' =>  'Asus',
            'price' =>  8700000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-X409FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A409FJ - (i7-8565U / 8GB-RAM / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A409FJ - (i7-8565U / 8GB-RAM / 1TB-HDD)', '-'),
            'image' =>  'vivobook-a409fj.png',
            'brand' =>  'Asus',
            'price' =>  11300000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-X409FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A409FJ - (i7-8565U / 8GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A409FJ - (i7-8565U / 8GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-a409fj.png',
            'brand' =>  'Asus',
            'price' =>  11800000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" /  FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-X409FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A509FJ - (i5-8265U / 4GB-RAM / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A509FJ - (i5-8265U / 4GB-RAM / 1TB-HDD)', '-'),
            'image' =>  'vivobook-a509fj.png',
            'brand' =>  'Asus',
            'price' =>  8300000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-15-X509FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A509FJ - (i5-8265U / 4GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A509FJ - (i5-8265U / 4GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-a509fj.png',
            'brand' =>  'Asus',
            'price' =>  8700000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-15-X509FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A509FJ - (i7-8565U / 8GB-RAM / 1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A509FJ - (i7-8565U / 8GB-RAM / 1TB-HDD)', '-'),
            'image' =>  'vivobook-a509fj.png',
            'brand' =>  'Asus',
            'price' =>  11300000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-15-X509FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A509FJ - (i7-8565U / 8GB-RAM / 512GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A509FJ - (i7-8565U / 8GB-RAM / 512GB-SSD)', '-'),
            'image' =>  'vivobook-a509fj.png',
            'brand' =>  'Asus',
            'price' =>  11800000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-15-X509FJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A409UJ',
            'slug'  =>  Str::slug('Asus VivoBook A409UJ', '-'),
            'image' =>  'vivobook-a409uj.png',
            'brand' =>  'Asus',
            'price' =>  7100000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-X409UJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A509UJ',
            'slug'  =>  Str::slug('Asus VivoBook A509UJ', '-'),
            'image' =>  'vivobook-a509uj.png',
            'brand' =>  'Asus',
            'price' =>  7100000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-15-X509UJ/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A409UA - (512GB-SSD)',
            'slug'  =>  Str::slug('Asus VivoBook A409UA - (512GB-SSD)', '-'),
            'image' =>  'vivobook-a409ua.png',
            'brand' =>  'Asus',
            'price' =>  6350000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-X409UA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook A409UA - (1TB-HDD)',
            'slug'  =>  Str::slug('Asus VivoBook A409UA - (1TB-HDD)', '-'),
            'image' =>  'vivobook-a409ua.png',
            'brand' =>  'Asus',
            'price' =>  5850000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-X409UA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook M409DA - (Ryzen-3-3200 / 4GB-RAM)',
            'slug'  =>  Str::slug('Asus VivoBook M409DA - (Ryzen-3-3200 / 4GB-RAM)', '-'),
            'image' =>  'vivobook-m409da.png',
            'brand' =>  'Asus',
            'price' =>  5800000,
            'processor' =>  'AMD Ryzen 3 3200U, 2.6 GHz dual-core, up to 3.5 GHz',
            'gpu'   =>  'AMD Radeon R3 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-M409DA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook M409DA - (Ryzen-5-3500 / 8GB-RAM)',
            'slug'  =>  Str::slug('Asus VivoBook M409DA - (Ryzen-5-3500 / 8GB-RAM)', '-'),
            'image' =>  'vivobook-m409da.png',
            'brand' =>  'Asus',
            'price' =>  7700000,
            'processor' =>  'AMD Ryzen 5 3500U, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon R3 Graphics (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'VGA Webcam / Fingerprint Reader',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-14-M409DA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook F571GD - (i5-9300H)',
            'slug'  =>  Str::slug('Asus VivoBook F571GD - (i5-9300H)', '-'),
            'image' =>  'vivobook-f571gd.png',
            'brand' =>  'Asus',
            'price' =>  12300000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x1) / USB 2.0 (x2)/ HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-F571GD/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook F571GD - (i7-9750H)',
            'slug'  =>  Str::slug('Asus VivoBook F571GD - (i7-9750H)', '-'),
            'image' =>  'vivobook-f571gd.png',
            'brand' =>  'Asus',
            'price' =>  14300000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD + Intel Optane 32 GB',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x1) / USB 2.0 (x2)/ HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-F571GD/'
        ]);

        Alternative::create([
            'name'  =>  'Asus VivoBook F571GT',
            'slug'  =>  Str::slug('Asus VivoBook F571GT', '-'),
            'image' =>  'vivobook-f571gt.png',
            'brand' =>  'Asus',
            'price' =>  15300000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD + Intel Optane 32 GB',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.8,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x1) / USB 2.0 (x2)/ HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-Laptop-F571GD/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ZenBook Duo UX481FA',
            'slug'  =>  Str::slug('Asus ZenBook Duo UX481FA', '-'),
            'image' =>  'zenbook-ux481fa.png',
            'brand' =>  'Asus',
            'price' =>  16300000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 2 (x1) / USB 3.1 Gen 2 (x1) / USB 3.1 Gen 1 (x1) / HDMI  / Audio Jack / MicroSD Card Reader',
            'features'  =>  'IR Camera / Backlit Keyboard (White) / Touchscreen / ScreenPad Plus',
            'link'  =>  'https://www.asus.com/id/Laptops/ZenBook-Duo-UX481FL/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ZenBook Flip 14 (UM462DA) - (Ryzen-5-3500U)',
            'slug'  =>  Str::slug('Asus ZenBook Flip 14 (UM462DA) - (Ryzen-5-3500U)', '-'),
            'image' =>  'zenbook-flip-14-um462da.png',
            'brand' =>  'Asus',
            'price' =>  11300000,
            'processor' =>  'AMD Ryzen 5 3500U, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon Vega 8 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'IRHD Webcam / Backlit Keyboard (White) / Touchscreen / NumberPad on Touchpad / 360deg ErgoLift',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-ZenBook-Flip-14-UM462DA/'
        ]);

        Alternative::create([
            'name'  =>  'Asus ZenBook Flip 14 (UM462DA) - (Ryzen-7-3700U)',
            'slug'  =>  Str::slug('Asus ZenBook Flip 14 (UM462DA) - (Ryzen-7-3700U)', '-'),
            'image' =>  'zenbook-flip-14-um462da.png',
            'brand' =>  'Asus',
            'price' =>  13300000,
            'processor' =>  'AMD Ryzen 7 3700U, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'AMD Radeon RX Vega 10 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / NanoEdge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'IRHD Webcam / Backlit Keyboard (White) / Touchscreen / NumberPad on Touchpad / 360deg ErgoLift',
            'link'  =>  'https://www.asus.com/id/Laptops/ASUS-ZenBook-Flip-14-UM462DA/'
        ]);

        Alternative::create([
            'name'  =>  'HP Envy x360 - 13-ag0023au',
            'slug'  =>  Str::slug('HP Envy x360 - 13-ag0023au', '-'),
            'image' =>  'envy-x360-13-ag0023au.png',
            'brand' =>  'HP',
            'price' =>  15600000,
            'processor' =>  'AMD Ryzen 7-2700U, 2 GHz quad-core, up to 3.8 GHz',
            'gpu'   =>  'AMD Radeon RX Vega 10 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '512 GB NVMe M.2 SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 2 (x1) / USB 3.1 Gen 1 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'IRHD Webcam / Backlit Keyboard (White) / Touchscreen',
            'link'  =>  'https://store.hp.com/id-id/default/laptops-tablets/personal-laptops/envy-laptops/hp-envy-x360-13-ag0023au-4nt42pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Envy x360 - 13-ar0009au',
            'slug'  =>  Str::slug('HP Envy x360 - 13-ar0009au', '-'),
            'image' =>  'envy-x360-13-ar009au.png',
            'brand' =>  'HP',
            'price' =>  17500000,
            'processor' =>  'AMD Ryzen 7 3700U, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'AMD Radeon RX Vega 10 (System Shared)',
            'ram'   =>  16,
            'storage'   =>  '512 GB NVMe M.2 SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x2) / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Touchscreen',
            'link'  =>  'https://store.hp.com/id-id/default/hp-envy-x360-13-ar0009au-6ty65pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Notebook - 14s-dk0005au',
            'slug'  =>  Str::slug('HP Notebook - 14s-dk0005au', '-'),
            'image' =>  'notebook-14s-dk0005au.png',
            'brand' =>  'HP',
            'price' =>  3600000,
            'processor' =>  'AMD A4-9125, 2.3 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'AMD Radeon R3 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB M.2 SSD',
            'display'   =>  '14" / HD / 768p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 Gen 1 (x2) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (White)',
            'link'  =>  'https://store.hp.com/id-id/default/hp-notebook-14s-dk0005au-6ny35pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Notebook - 14s-dk0023au',
            'slug'  =>  Str::slug('HP Notebook - 14s-dk0023au', '-'),
            'image' =>  'notebook-14s-dk0023au.png',
            'brand' =>  'HP',
            'price' =>  4600000,
            'processor' =>  'AMD A9-9425, 3.1 GHz dual-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon R5 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 Gen 1 (x2) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.hp.com/id-id/default/hp-notebook-14s-dk0023au-6sp89pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Notebook - 14s-cf0069tx',
            'slug'  =>  Str::slug('HP Notebook - 14s-cf0069tx', '-'),
            'image' =>  'notebook-14s-cf0069tx.png',
            'brand' =>  'HP',
            'price' =>  6900000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'AMD Radeon 530 Graphics (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x1) / HDMI / Audio Jack /  Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.hp.com/id-id/default/hp-notebook-14s-cf0069tx-6tk87pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Notebook - 14s-dk0024au',
            'slug'  =>  Str::slug('HP Notebook - 14s-dk0024au', '-'),
            'image' =>  'notebook-14s-dk0024au.png',
            'brand' =>  'HP',
            'price' =>  4700000,
            'processor' =>  'AMD A9-9425, 3.1 GHz dual-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon R5 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 Gen 1 (x2) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.hp.com/id-id/default/hp-notebook-14s-dk0024au-6tc55pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion - 13-an1033tu',
            'slug'  =>  Str::slug('HP Pavilion - 13-an1033tu', '-'),
            'image' =>  'pavilion-13-an1033tu.png',
            'brand' =>  'HP',
            'price' =>  8250000,
            'processor' =>  'Intel Core i3-1005G1, 1.2 GHz dual-core, up to 3.4 GHz',
            'gpu'   =>  'Intel UHD Graphics (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe NVMe M.2 SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x2) / HDMI / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Touchscreen',
            'link'  =>  'https://store.hp.com/id-id/default/hp-pavilion-13-an1033tu-8tn70pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion Gaming - 15-ec0001ax',
            'slug'  =>  Str::slug('HP Pavilion Gaming - 15-ec0001ax', '-'),
            'image' =>  'pavilion-gaming-15-ec0001ax-02ax.png',
            'brand' =>  'HP',
            'price' =>  10000000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (3 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe NVMe M.2 SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / LAN / Multi-Format Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (Acid Green)',
            'link'  =>  'https://store.hp.com/id-id/default/hp-pavilion-gaming-15-ec0001ax-8pd39pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion Gaming - 15-ec0002ax',
            'slug'  =>  Str::slug('HP Pavilion Gaming - 15-ec0002ax', '-'),
            'image' =>  'pavilion-gaming-15-ec0001ax-02ax.png',
            'brand' =>  'HP',
            'price' =>  13400000,
            'processor' =>  'AMD Ryzen 7 3750H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB PCIe NVMe M.2 SSD + 1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / LAN / Multi-Format Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (Acid Green)',
            'link'  =>  'https://store.hp.com/id-id/default/hp-pavilion-gaming-15-ec0002ax-8pd40pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion Gaming - 15-ec0022ax',
            'slug'  =>  Str::slug('HP Pavilion Gaming - 15-ec0022ax', '-'),
            'image' =>  'pavilion-gaming-15-ec0022ax.png',
            'brand' =>  'HP',
            'price' =>  15400000,
            'processor' =>  'AMD Ryzen 7 3750H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1660 Ti (6 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB PCIe NVMe M.2 SSD + 1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / LAN / Multi-Format Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (Ultra Violet)',
            'link'  =>  'https://store.hp.com/id-id/default/hp-pavilion-gaming-15-ec0022ax-8rf07pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion x360 - 14-dh1005tx',
            'slug'  =>  Str::slug('HP Pavilion x360 - 14-dh1005tx', '-'),
            'image' =>  'pavilion-x360-14-dh1005tx.png',
            'brand' =>  'HP',
            'price' =>  14700000,
            'processor' =>  'Intel Core i7-10510U, 1.8 GHz quad-core, up to 4.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe NVMe M.2 SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x2)  / HDMI / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard Natural Silver) / Touchscreen / 360deg',
            'link'  =>  'https://store.hp.com/id-id/default/hp-pavilion-x360-14-dh1005tx-8bx30pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion x360 - 14-dh1003tx',
            'slug'  =>  Str::slug('HP Pavilion x360 - 14-dh1003tx', '-'),
            'image' =>  'pavilion-x360-14-dh1003tx.png',
            'brand' =>  'HP',
            'price' =>  11800000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB PCIe NVMe M.2 SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x2)  / HDMI / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (Luminous Gold) / Touchscreen / 360deg',
            'link'  =>  'https://store.hp.com/id-id/default/hp-pavilion-x360-14-dh1003tx-8bd60pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion Gaming - 15-dk0043tx',
            'slug'  =>  Str::slug('HP Pavilion Gaming - 15-dk0043tx', '-'),
            'image' =>  'pavilion-gaming-15-dk0043tx-42tx.png',
            'brand' =>  'HP',
            'price' =>  17000000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1660 Ti (6 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB PCIe NVMe M.2 SSD + 1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 2 (x1) / USB 3.1 (x3) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Acid Green)',
            'link'  =>  'https://store.hp.com/id-id/default/hp-gaming-pavilion-15-dk0043tx-7lh04pa.html'
        ]);

        Alternative::create([
            'name'  =>  'HP Pavilion Gaming - 15-dk0042tx',
            'slug'  =>  Str::slug('HP Pavilion Gaming - 15-dk0042tx', '-'),
            'image' =>  'pavilion-gaming-15-dk0043tx-42tx.png',
            'brand' =>  'HP',
            'price' =>  14000000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB PCIe NVMe M.2 SSD + 1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / micro-edge',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 2 (x1) / USB 3.1 (x3) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Acid Green)',
            'link'  =>  'https://store.hp.com/id-id/default/hp-gaming-pavilion-15-dk0042tx-7lj56pa.html'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 Air (SF313-51) - Intel Core i3',
            'slug'  =>  Str::slug('Acer Swift 3 Air (SF313-51) - Intel Core i3', '-'),
            'image' =>  'swift-3-sf313-51-silver.png',
            'brand' =>  'Acer',
            'price' =>  7500000,
            'processor' =>  'Intel Core i3-8130U, 2.2 GHz dual-core, up to 3.4 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.3,
            'connectivity'  =>  'Wi-Fi',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / Micro-SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader / Nano-SIM Card Slot (4G)',
            'link'  =>  'https://store.acer.com/en-id/swift-3-air-sf313-51-core-i3-silver'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 Air (SF313-51) - Intel Core i5',
            'slug'  =>  Str::slug('Acer Swift 3 Air (SF313-51) - Intel Core i5', '-'),
            'image' =>  'swift-3-sf313-51-silver.png',
            'brand' =>  'Acer',
            'price' =>  9000000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.3,
            'connectivity'  =>  'Wi-Fi',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / Micro-SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader / Nano-SIM Card Slot (4G)',
            'link'  =>  'https://store.acer.com/en-id/swift-3-air-sf313-51-core-i5-silver'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 Air (SF313-51) - Intel Core i7',
            'slug'  =>  Str::slug('Acer Swift 3 Air (SF313-51) - Intel Core i7', '-'),
            'image' =>  'swift-3-sf313-51-silver.png',
            'brand' =>  'Acer',
            'price' =>  11500000,
            'processor' =>  'Intel Core i7-8550U, 1.8 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.3,
            'connectivity'  =>  'Wi-Fi',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / Micro-SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader / Nano-SIM Card Slot (4G)',
            'link'  =>  'https://store.acer.com/en-id/swift-3-air-sf313-51-core-i7-silver'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 (SF314-41) - AMD Ryzen 5',
            'slug'  =>  Str::slug('Acer Swift 3 (SF314-41) - AMD Ryzen 5', '-'),
            'image' =>  'swift-3-sf314-41-41.png',
            'brand' =>  'Acer',
            'price' =>  8000000,
            'processor' =>  'AMD Ryzen 5 3500U, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon Vega 8 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '512 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 2 (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader',
            'link'  =>  'https://store.acer.com/en-id/notebooks/swift/swift3-sf314-41-ryzen-5-3500u-silver'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 (SF314-41) - AMD Athlon - 512 GB SSD',
            'slug'  =>  Str::slug('Acer Swift 3 (SF314-41) - AMD Athlon - 512 GB SSD', '-'),
            'image' =>  'swift-3-sf314-41-41.png',
            'brand' =>  'Acer',
            'price' =>  6100000,
            'processor' =>  'AMD Athlon 300U, 2.4 GHz dual-core, up to 3.3 GHz',
            'gpu'   =>  'AMD Radeon Vega 3 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '512 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White)',
            'link'  =>  'https://store.acer.com/en-id/swift-3-sf314-41-athlon-blue-512gb-ssd'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 (SF314-41) - AMD Athlon - 8 GB RAM',
            'slug'  =>  Str::slug('Acer Swift 3 (SF314-41) - AMD Athlon - 8 GB RAM', '-'),
            'image' =>  'swift-3-sf314-41-41.png',
            'brand' =>  'Acer',
            'price' =>  6200000,
            'processor' =>  'AMD Athlon 300U, 2.4 GHz dual-core, up to 3.3 GHz',
            'gpu'   =>  'AMD Radeon Vega 3 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White)',
            'link'  =>  'https://store.acer.com/en-id/swift-3-sf314-41-athlon-blue-8gb'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 (SF314-41) - AMD Athlon',
            'slug'  =>  Str::slug('Acer Swift 3 (SF314-41) - AMD Athlon', '-'),
            'image' =>  'swift-3-sf314-41-41.png',
            'brand' =>  'Acer',
            'price' =>  5800000,
            'processor' =>  'AMD Athlon 300U, 2.4 GHz dual-core, up to 3.3 GHz',
            'gpu'   =>  'AMD Radeon Vega 3 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White)',
            'link'  =>  'https://store.acer.com/en-id/swift-3-sf314-41-athlon-blue'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 (SF314-57G) - Intel Core i5',
            'slug'  =>  Str::slug('Acer Swift 3 (SF314-57G) - Intel Core i5', '-'),
            'image' =>  'swift-3-sf314-57g-silver.png',
            'brand' =>  'Acer',
            'price' =>  12000000,
            'processor' =>  'Intel Core i5-1035G1, 1 GHz quad-core, up to 3.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://store.acer.com/en-id/swift-3-sf314-57g-i5-1035g1-silver'
        ]);

        Alternative::create([
            'name'  =>  'Acer Swift 3 (SF314-57G) - Intel Core i7',
            'slug'  =>  Str::slug('Acer Swift 3 (SF314-57G) - Intel Core i7', '-'),
            'image' =>  'swift-3-sf314-57g-silver.png',
            'brand' =>  'Acer',
            'price' =>  16500000,
            'processor' =>  'Intel Core i7-1065G7, 1.3 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x1) / USB 2.0 (x1) / HDMI / Audio Jack',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://store.acer.com/en-id/swift-3-sf314-57g-i7-1065g7-silver'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A311-31-C5Z5)',
            'slug'  =>  Str::slug('Acer Aspire 3 (A311-31-C5Z5)', '-'),
            'image' =>  'aspire-3-a311-31-c5z5.png',
            'brand' =>  'Acer',
            'price' =>  3475000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel UHD Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '500 GB HDD',
            'display'   =>  '11.6" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x2) / USB 2.0  (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire-3-a311-31-c5z5-blue'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A311-31-C3V4)',
            'slug'  =>  Str::slug('Acer Aspire 3 (A311-31-C3V4)', '-'),
            'image' =>  'aspire-3-a311-31-c3v4.png',
            'brand' =>  'Acer',
            'price' =>  3475000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel UHD Graphics (System Shared)',
            'ram'   =>  2,
            'storage'   =>  '500 GB HDD',
            'display'   =>  '11.6" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x2) / USB 2.0  (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire-3-a311-31-c3v4-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A314-21) - Blue',
            'slug'  =>  Str::slug('Acer Aspire 3 (A314-21) - Blue', '-'),
            'image' =>  'aspire-3-a314-21-blue.png',
            'brand' =>  'Acer',
            'price' =>  3650000,
            'processor' =>  'AMD A4-9120e, 1.5 GHz dual-core, up to 2.2 GHz',
            'gpu'   =>  'AMD Radeon R3 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire3-a314-21-amd-a4-9120e-blue'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A314-21) - Black',
            'slug'  =>  Str::slug('Acer Aspire 3 (A314-21) - Black', '-'),
            'image' =>  'aspire-3-a314-21-blue.png',
            'brand' =>  'Acer',
            'price' =>  3650000,
            'processor' =>  'AMD A4-9120e, 1.5 GHz dual-core, up to 2.2 GHz',
            'gpu'   =>  'AMD Radeon R3 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire3-a314-21-amd-a4-9120e-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A314-32) - Blue',
            'slug'  =>  Str::slug('Acer Aspire 3 (A314-32) - Blue', '-'),
            'image' =>  'aspire-3-a314-32-blue.png',
            'brand' =>  'Acer',
            'price' =>  3850000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel HD Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire-3-a314-32-intel-celeron-blue'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A314-32) - Black',
            'slug'  =>  Str::slug('Acer Aspire 3 (A314-32) - Black', '-'),
            'image' =>  'aspire-3-a314-32-black.png',
            'brand' =>  'Acer',
            'price' =>  3850000,
            'processor' =>  'Intel Celeron N4000, 1.1 GHz dual-core, up to 2.6 GHz',
            'gpu'   =>  'Intel HD Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x2) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'VGA Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire-3-a314-32-intel-celeron-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A314-41) -  Black',
            'slug'  =>  Str::slug('Acer Aspire 3 (A314-41) -  Black', '-'),
            'image' =>  'aspire-3-a314-41-black.png',
            'brand' =>  'Acer',
            'price' =>  4600000,
            'processor' =>  'AMD A9-9420, 3 GHz dual-core, up to 3.6 GHz',
            'gpu'   =>  'AMD Radeon R5 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'VGA Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire3-a314-41-amd-a9-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 3 (A314-41) -  Blue',
            'slug'  =>  Str::slug('Acer Aspire 3 (A314-41) -  Blue', '-'),
            'image' =>  'aspire-3-a314-41-blue.png',
            'brand' =>  'Acer',
            'price' =>  4600000,
            'processor' =>  'AMD A9-9420, 3 GHz dual-core, up to 3.6 GHz',
            'gpu'   =>  'AMD Radeon R5 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'VGA Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire3-a314-41-amd-a9-blue'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 5 (A514-52K) - SSD - Black',
            'slug'  =>  Str::slug('Acer Aspire 5 (A514-52K) - SSD - Black', '-'),
            'image' =>  'aspire-5-a514-52k-black.png',
            'brand' =>  'Acer',
            'price' =>  5850000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Intel HD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '256 GB SSD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire5-a514-52k-i3-ssd-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 5 (A514-52K) - HDD - Black',
            'slug'  =>  Str::slug('Acer Aspire 5 (A514-52K) - HDD - Black', '-'),
            'image' =>  'aspire-5-a514-52k-black.png',
            'brand' =>  'Acer',
            'price' =>  5900000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Intel HD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire5-a514-52k-i3-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 5 (A514-51KG) - Black',
            'slug'  =>  Str::slug('Acer Aspire 5 (A514-51KG) - Black', '-'),
            'image' =>  'aspire-5-a514-51kg-black.png',
            'brand' =>  'Acer',
            'price' =>  6700000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam  / Optical Driver (DVD-RW)',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire5-a514-51kg-i3-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 5 (A514-52KG) - Black - SSD - FHD',
            'slug'  =>  Str::slug('Acer Aspire 5 (A514-52KG) - Black - SSD - FHD', '-'),
            'image' =>  'aspire-5-a514-52k-black-ssd-fhd.png',
            'brand' =>  'Acer',
            'price' =>  7500000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Nvidia GeForce MX130 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '512 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire5-a514-52kg-i3-fhd-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 5 (A514-52G) - Intel Core i5 - Black',
            'slug'  =>  Str::slug('Acer Aspire 5 (A514-52G) - Intel Core i5 - Black', '-'),
            'image' =>  'aspire-5-a514-52g-black.png',
            'brand' =>  'Acer',
            'price' =>  8500000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire5-a514-52g-i5-10210u-black'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 5 (A514-52G) - Intel Core i5 - Black - FHD',
            'slug'  =>  Str::slug('Acer Aspire 5 (A514-52G) - Intel Core i5 - Black - FHD', '-'),
            'image' =>  'aspire-5-a514-52g-black.png',
            'brand' =>  'Acer',
            'price' =>  10500000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire5-a514-52g-i5-10210u-fhd-black-nx-hmmsn-005'
        ]);

        Alternative::create([
            'name'  =>  'Acer Aspire 5 (A514-52G) - Intel Core i7 - Black - FHD',
            'slug'  =>  Str::slug('Acer Aspire 5 (A514-52G) - Intel Core i7 - Black - FHD', '-'),
            'image' =>  'aspire-5-a514-52g-black.png',
            'brand' =>  'Acer',
            'price' =>  13500000,
            'processor' =>  'Intel Core i7-10510U, 1.8 GHz quad-core, up to 4.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD  + 128 GB SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / narrow-bezeled',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://store.acer.com/en-id/notebooks/aspire/aspire5-a514-52g-i7-10510u-fhd-black-office'
        ]);

        Alternative::create([
            'name'  =>  'Acer Nitro 5 (AN515-43-R1PB)',
            'slug'  =>  Str::slug('Acer Nitro 5 (AN515-43-R1PB)', '-'),
            'image' =>  'nitro-5-an515-43.png',
            'brand' =>  'Acer',
            'price' =>  9400000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon RX 560X (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / narrow-bezeled',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Red)',
            'link'  =>  'https://store.acer.com/en-id/gaming/gaming-notebook/nitro-5-an515-43-r1pb'
        ]);

        Alternative::create([
            'name'  =>  'Acer Nitro 5 (AN515-43-R1BL)',
            'slug'  =>  Str::slug('Acer Nitro 5 (AN515-43-R1BL)', '-'),
            'image' =>  'nitro-5-an515-43.png',
            'brand' =>  'Acer',
            'price' =>  10000000,
            'processor' =>  'AMD Ryzen 5 3550H, 2.1 GHz quad-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon RX 560X (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / narrow-bezeled',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Red)',
            'link'  =>  'https://store.acer.com/en-id/gaming/gaming-notebook/nitro-5-an515-43-r1bl'
        ]);

        Alternative::create([
            'name'  =>  'Acer Nitro 5 (AN515-43-R90W)',
            'slug'  =>  Str::slug('Acer Nitro 5 (AN515-43-R90W)', '-'),
            'image' =>  'nitro-5-an515-43.png',
            'brand' =>  'Acer',
            'price' =>  15000000,
            'processor' =>  'AMD Ryzen 7 3750H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'AMD Radeon RX 560X (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 512 GB NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / narrow-bezeled',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Red)',
            'link'  =>  'https://store.acer.com/en-id/gaming/gaming-notebook/nitro-5-an515-43-r90w'
        ]);

        Alternative::create([
            'name'  =>  'Acer Nitro 5 (AN515-54-507M)',
            'slug'  =>  Str::slug('Acer Nitro 5 (AN515-54-507M)', '-'),
            'image' =>  'nitro-5-an515-54.png',
            'brand' =>  'Acer',
            'price' =>  10200000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (3 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Red)',
            'link'  =>  'https://store.acer.com/en-id/gaming/gaming-notebook/nitro-5-an515-54-507m-gtx1050'
        ]);

        Alternative::create([
            'name'  =>  'Acer Nitro 5 (AN515-54-76RU)',
            'slug'  =>  Str::slug('Acer Nitro 5 (AN515-54-76RU)', '-'),
            'image' =>  'nitro-5-an515-54.png',
            'brand' =>  'Acer',
            'price' =>  14500000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB SSD',
            'display'   =>  '15.6" / FHD / 1080p / 120 Hz',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / USB 2.0 (x1) / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Red)',
            'link'  =>  'https://store.acer.com/en-id/gaming/gaming-notebook/nitro-5-an515-54-76ru'
        ]);

        Alternative::create([
            'name'  =>  'Acer Nitro 7 (AN715-51-701Y)',
            'slug'  =>  Str::slug('Acer Nitro 7 (AN715-51-701Y)', '-'),
            'image' =>  'acer-nitro-7-an715-51.png',
            'brand' =>  'Acer',
            'price' =>  15500000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / narrow-bezeled',
            'unit_weight'   =>  2.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (Red)',
            'link'  =>  'https://store.acer.com/en-id/gaming/gaming-notebook/nitro-7-an715-51-701y-gtx1650'
        ]);

        Alternative::create([
            'name'  =>  'Acer Predator Triton 300 (PT315-51-740T)',
            'slug'  =>  Str::slug('Acer Predator Triton 300 (PT315-51-740T)', '-'),
            'image' =>  'predator-triton-300-pt315-51.png',
            'brand' =>  'Acer',
            'price' =>  18000000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 256 GB NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / narrow-bezeled',
            'unit_weight'   =>  2.5,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x2) / USB 2.0 (x1) / Audio Jack / HDMI / LAN / Mini DisplayPort',
            'features'  =>  'Backlit Keyboard (RGB)',
            'link'  =>  'https://store.acer.com/en-id/gaming/gaming-notebook/predator-triton-300-pt315-51-58bg'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 3480',
            'slug'  =>  Str::slug('Dell Inspiron 14 3480', '-'),
            'image' =>  'inspiron-14-3480-3481.png',
            'brand' =>  'Dell',
            'price' =>  8700000,
            'processor' =>  'Intel Core i5-8265U, 1.6 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'AMD Radeon 520 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.6,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-3480-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 3493 - (i5-1035G1)',
            'slug'  =>  Str::slug('Dell Inspiron 14 3493 - (i5-1035G1)', '-'),
            'image' =>  'inspiron-14-3493.png',
            'brand' =>  'Dell',
            'price' =>  8150000,
            'processor' =>  'Intel Core i5-1035G1, 1 GHz quad-core, up to 3.6 GHz',
            'gpu'   =>  'Intel UHD Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-3493-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 3493 - (i7-1065G7)',
            'slug'  =>  Str::slug('Dell Inspiron 14 3493 - (i7-1065G7)', '-'),
            'image' =>  'inspiron-14-3493.png',
            'brand' =>  'Dell',
            'price' =>  13000000,
            'processor' =>  'Intel Core i7-1065G7, 1.3 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  1.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-3493-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3580 - (256GB-HDD)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3580 - (256GB-HDD)', '-'),
            'image' =>  'inspiron-15-3580-3581.png',
            'brand' =>  'Dell',
            'price' =>  12300000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'AMD Radeon 520 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB M.2 PCIe NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3580-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3580 - (2TB-HDD)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3580 - (2TB-HDD)', '-'),
            'image' =>  'inspiron-15-3580-3581.png',
            'brand' =>  'Dell',
            'price' =>  12700000,
            'processor' =>  'Intel Core i7-8565U, 1.8 GHz quad-core, up to 4.6 GHz',
            'gpu'   =>  'AMD Radeon 520 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '2 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3580-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3581 - (AMD Radeon 520)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3581 - (AMD Radeon 520)', '-'),
            'image' =>  'inspiron-15-3580-3581.png',
            'brand' =>  'Dell',
            'price' =>  6950000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'AMD Radeon 520 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3580-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3581 - (Intel UHD Graphics 620)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3581 - (Intel UHD Graphics 620)', '-'),
            'image' =>  'inspiron-15-3580-3581.png',
            'brand' =>  'Dell',
            'price' =>  6150000,
            'processor' =>  'Intel Core i3-7020U, 2.3 GHz dual-core',
            'gpu'   =>  'Intel UHD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3580-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3585 - (Ryzen-5-2500U)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3585 - (Ryzen-5-2500U)', '-'),
            'image' =>  'inspiron-15-3585.png',
            'brand' =>  'Dell',
            'price' =>  7000000,
            'processor' =>  'AMD Ryzen 5 2500U, 2 GHz quad-core, up to 3.6 GHz',
            'gpu'   =>  'AMD Radeon Vega 8 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3585-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3585 - (Ryzen-3-2200U)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3585 - (Ryzen-3-2200U)', '-'),
            'image' =>  'inspiron-15-3585.png',
            'brand' =>  'Dell',
            'price' =>  5800000,
            'processor' =>  'AMD Ryzen 3 2200U, 2.5 GHz dual-core, up to 3.4 GHz',
            'gpu'   =>  'AMD Radeon Vega 3 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3585-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3593 - (i5-1035G1 / 1TB-HD)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3593 - (i5-1035G1 / 1TB-HD)', '-'),
            'image' =>  'inspiron-15-3593.png',
            'brand' =>  'Dell',
            'price' =>  9000000,
            'processor' =>  'Intel Core i5-1035G1, 1 GHz quad-core, up to 3.6 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3593-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3593 - (i7-1065G7 / 512GB-SSD)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3593 - (i7-1065G7 / 512GB-SSD)', '-'),
            'image' =>  'inspiron-15-3593.png',
            'brand' =>  'Dell',
            'price' =>  13000000,
            'processor' =>  'Intel Core i7-1065G7, 1.3 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3593-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 3593 - (i7-1065G7 / 1TB-HDD)',
            'slug'  =>  Str::slug('Dell Inspiron 15 3593 - (i7-1065G7 / 1TB-HDD)', '-'),
            'image' =>  'inspiron-15-3593.png',
            'brand' =>  'Dell',
            'price' =>  12100000,
            'processor' =>  'Intel Core i7-1065G7, 1.3 GHz quad-core, up to 3.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.0,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader / LAN',
            'features'  =>  'HD Webcam / Optical Driver (DVD-RW)',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-3593-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 13 5391',
            'slug'  =>  Str::slug('Dell Inspiron 13 5391', '-'),
            'image' =>  'inspiron-13-5391.png',
            'brand' =>  'Dell',
            'price' =>  15000000,
            'processor' =>  'Intel Core i7-10510U, 1.8 GHz quad-core, up to 4.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/inspiron-13-5391-wifi-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 5490 - (i5-10210U / 512GB-SSD)',
            'slug'  =>  Str::slug('Dell Inspiron 14 5490 - (i5-10210U / 512GB-SSD)', '-'),
            'image' =>  'inspiron-14-5490.png',
            'brand' =>  'Dell',
            'price' =>  12900000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-5490-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 5490 - (i5-10210U / 256GB-SSD)',
            'slug'  =>  Str::slug('Dell Inspiron 14 5490 - (i5-10210U / 256GB-SSD)', '-'),
            'image' =>  'inspiron-14-5490.png',
            'brand' =>  'Dell',
            'price' =>  11600000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB M.2 PCIe NVMe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-5490-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 5490 - (i7-10510U / 512GB-SSD)',
            'slug'  =>  Str::slug('Dell Inspiron 14 5490 - (i7-10510U / 512GB-SSD)', '-'),
            'image' =>  'inspiron-14-5490.png',
            'brand' =>  'Dell',
            'price' =>  15500000,
            'processor' =>  'Intel Core i7-10510U, 1.8 GHz quad-core, up to 4.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-5490-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 5491 2-in1 - (i7-10510U)',
            'slug'  =>  Str::slug('Dell Inspiron 14 5491 2-in1 - (i7-10510U)', '-'),
            'image' =>  'inspiron-14-5491-2-in-1.png',
            'brand' =>  'Dell',
            'price' =>  15300000,
            'processor' =>  'Intel Core i7-10510U, 1.8 GHz quad-core, up to 4.9 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'HD Webcam / Touchscreen',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-5491-2-in-1-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 5491 2-in1 - (i5-10210U)',
            'slug'  =>  Str::slug('Dell Inspiron 14 5491 2-in1 - (i5-10210U)', '-'),
            'image' =>  'inspiron-14-5491-2-in-1.png',
            'brand' =>  'Dell',
            'price' =>  13800000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX230 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 (x1) / USB 3.1 Gen 1 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / SD Card Reader',
            'features'  =>  'HD Webcam / Touchscreen',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-5491-2-in-1-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 13 7391 2-in-1 - (i7-10510U)',
            'slug'  =>  Str::slug('Dell Inspiron 13 7391 2-in-1 - (i7-10510U)', '-'),
            'image' =>  'inspiron-13-7391-2-in-1.png',
            'brand' =>  'Dell',
            'price' =>  19900000,
            'processor' =>  'Intel Core i7-10510U, 1.8 GHz quad-core, up to 4.9 GHz',
            'gpu'   =>  'Intel UHD Graphics (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 Thunderbolt 3 (x1) / USB 3.1 Gen 1 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Touchscreen Active Pen Support',
            'link'  =>  'https://www.dell.com/id/p/inspiron-13-7391-2-in-1-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 13 7391 2-in-1 - (i5-10210U)',
            'slug'  =>  Str::slug('Dell Inspiron 13 7391 2-in-1 - (i5-10210U)', '-'),
            'image' =>  'inspiron-13-7391-2-in-1.png',
            'brand' =>  'Dell',
            'price' =>  17000000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Intel UHD Graphics (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 Thunderbolt 3 (x1) / USB 3.1 Gen 1 (x1) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader / Touchscreen Active Pen Support',
            'link'  =>  'https://www.dell.com/id/p/inspiron-13-7391-2-in-1-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 14 7490',
            'slug'  =>  Str::slug('Dell Inspiron 14 7490', '-'),
            'image' =>  'inspiron-14-7490.png',
            'brand' =>  'Dell',
            'price' =>  19000000,
            'processor' =>  'Intel Core i5-10210U, 1.6 GHz quad-core, up to 4.2 GHz',
            'gpu'   =>  'Nvidia GeForce MX250 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '512 GB M.2 PCIe NVMe SSD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 Thunderbolt 3 (x1) / USB 3.1 Gen 1 (x2) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/inspiron-14-7490-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 7591 - (i5-9300H)',
            'slug'  =>  Str::slug('Dell Inspiron 15 7591 - (i5-9300H)', '-'),
            'image' =>  'inspiron-15-7591.png',
            'brand' =>  'Dell',
            'price' =>  17000000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (3 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB M.2 PCIe NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.9,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 Thunderbolt 3 (x1) / USB 3.1 (x3) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-7591-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell Inspiron 15 7591 - (i7-9750H)',
            'slug'  =>  Str::slug('Dell Inspiron 15 7591 - (i7-9750H)', '-'),
            'image' =>  'inspiron-15-7591.png',
            'brand' =>  'Dell',
            'price' =>  18500000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (3 GB)',
            'ram'   =>  8,
            'storage'   =>  '256 GB M.2 PCIe NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / Narrow Border',
            'unit_weight'   =>  1.9,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C Gen 1 Thunderbolt 3 (x1) / USB 3.1 (x3) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/inspiron-15-7591-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell G5 15-5590 - (i7-9750H / GTX 1660 Ti)',
            'slug'  =>  Str::slug('Dell G5 15-5590 - (i7-9750H / GTX 1660 Ti)', '-'),
            'image' =>  'g5-15-5590.png',
            'brand' =>  'Dell',
            'price' =>  20000000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1660 Ti (6 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 256 GB M.2 PCIe NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / Narrow Border',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C  Gen 2 Thunderbolt 3 (x1) / USB 3.1 Gen 1 (x3) / HDMI / Audio Jack / MicroSD Card Reader / LAN / Mini DisplayPort',
            'features'  =>  'HD Webcam / Backlit Keyboard (Blue) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/g-series-15-5590-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell G5 15-5590 - (i7-9750H / GTX 1650)',
            'slug'  =>  Str::slug('Dell G5 15-5590 - (i7-9750H / GTX 1650)', '-'),
            'image' =>  'g5-15-5590.png',
            'brand' =>  'Dell',
            'price' =>  17000000,
            'processor' =>  'Intel Core i7-9750H, 2.6 GHz hexa-core, up to 4.5 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 256 GB M.2 PCIe NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / Narrow Border',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 Gen 1 (x3) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (Blue) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/g-series-15-5590-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Dell G5 15-5590 - (i5-9300H / GTX 1650)',
            'slug'  =>  Str::slug('Dell G5 15-5590 - (i5-9300H / GTX 1650)', '-'),
            'image' =>  'g5-15-5590.png',
            'brand' =>  'Dell',
            'price' =>  15200000,
            'processor' =>  'Intel Core i5-9300H, 2.4 GHz quad-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1650 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 256 GB M.2 PCIe NVMe SSD',
            'display'   =>  '15.6" / FHD / 1080p / 144 Hz / Narrow Border',
            'unit_weight'   =>  2.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 Gen 1 (x3) / HDMI / Audio Jack / MicroSD Card Reader',
            'features'  =>  'HD Webcam / Backlit Keyboard (Blue) / Fingerprint Reader',
            'link'  =>  'https://www.dell.com/id/p/g-series-15-5590-laptop/pd?ref=PD_OC'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo ThinkPad E480-55ID',
            'slug'  =>  Str::slug('Lenovo ThinkPad E480-55ID', '-'),
            'image' =>  'thinkpad-e480-14.png',
            'brand' =>  'Lenovo',
            'price' =>  16000000,
            'processor' =>  'Intel Core i7-8550U, 1.8 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'AMD Radeon RX 550 (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz / Bezel-less',
            'unit_weight'   =>  1.75,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) /  USB 3.1(x2) / USB 2.0 (x1) / HDMI / Audio Jack / MicroSD Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (White) / Fingerprint Reader',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/thinkpad/thinkpad-e-series/ThinkPad-E480/p/22TP2TEE480'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo ThinkPad X270',
            'slug'  =>  Str::slug('Lenovo ThinkPad X270', '-'),
            'image' =>  'thinkpad-x270.png',
            'brand' =>  'Lenovo',
            'price' =>  13800000,
            'processor' =>  'Intel Core i5-7200U, 2.5 GHz dual-core, up to 3.1 GHz',
            'gpu'   =>  'Intel HD Graphics 620 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '256 GB M.2 NVMe SSD',
            'display'   =>  '12.5" / HD / 768p / 60 Hz',
            'unit_weight'   =>  1.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 C (x1) / USB 3.0 (x2) / HDMI / Audio Jack / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader / SIM Card Slot (4G)',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/thinkpad/thinkpad-x-series/ThinkPad-X270/p/22TP2TX2700'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo ThinkPad E470 - (i3-7100)',
            'slug'  =>  Str::slug('Lenovo ThinkPad E470 - (i3-7100)', '-'),
            'image' =>  'thinkpad-e470.png',
            'brand' =>  'Lenovo',
            'price' =>  8500000,
            'processor' =>  'Intel Core i3-7100, 3.9 GHz dual-core',
            'gpu'   =>  'Intel HD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  1.9,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/thinkpad/thinkpad-e-series/ThinkPad-E470/p/22TP2TEE470'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo ThinkPad E470 - (i5-7200U)',
            'slug'  =>  Str::slug('Lenovo ThinkPad E470 - (i5-7200U)', '-'),
            'image' =>  'thinkpad-e470.png',
            'brand' =>  'Lenovo',
            'price' =>  11800000,
            'processor' =>  'Intel Core i5-7200U, 2.5 GHz dual-core, up to 3.1 GHz',
            'gpu'   =>  'Intel HD Graphics 620 (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  1.9,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/thinkpad/thinkpad-e-series/ThinkPad-E470/p/22TP2TEE470'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo ThinkPad E470 - (i7-7500U)',
            'slug'  =>  Str::slug('Lenovo ThinkPad E470 - (i7-7500U)', '-'),
            'image' =>  'thinkpad-e470.png',
            'brand' =>  'Lenovo',
            'price' =>  15200000,
            'processor' =>  'Intel Core i7-7500U, 2.7 GHz dual-core, up to 3.5 GHz',
            'gpu'   =>  'Nvidia GeForce 940MX (2 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  1.9,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x2) / USB 2.0 (x1) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam / Fingerprint Reader',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/thinkpad/thinkpad-e-series/ThinkPad-E470/p/22TP2TEE470'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo ThinkPad 13',
            'slug'  =>  Str::slug('Lenovo ThinkPad 13', '-'),
            'image' =>  'thinkpad-13-gen2.png',
            'brand' =>  'Lenovo',
            'price' =>  16800000,
            'processor' =>  'Intel Core i7-7500U, 2.7 GHz dual-core, up to 3.5 GHz',
            'gpu'   =>  'Intel Graphics HD 520 (System Shared)',
            'ram'   =>  8,
            'storage'   =>  '512 GB SATA M.2 SSD',
            'display'   =>  '13.3" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  1.4,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x3) / USB 3.0 C (x1) / HDMI / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'Fingerprint Reader',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/thinkpad/thinkpad-13-series/ThinkPad-13-Windows-2nd-Gen/p/22TP2TX133E'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo Ideapad 330 (15, Intel)',
            'slug'  =>  Str::slug('Lenovo Ideapad 330 (15, Intel)', '-'),
            'image' =>  'ideapad-330-15.png',
            'brand' =>  'Lenovo',
            'price' =>  12060000,
            'processor' =>  'Intel Core i5-8300H, 2.3 GHz quad-core, up to 4 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD + 16 GB Intel Optane',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz',
            'unit_weight'   =>  2.2,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'HD Webcam / Backlit Keyboard (White)',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/ideapad/ideapad-300-series/IdeaPad-330-15-Intel/p/88IP3000996'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo Ideapad 330 (14, AMD)',
            'slug'  =>  Str::slug('Lenovo Ideapad 330 (14, AMD)', '-'),
            'image' =>  'ideapad-330-14.png',
            'brand' =>  'Lenovo',
            'price' =>  4850000,
            'processor' =>  'AMD A9-9425, 3.1 GHz dual-core, up to 3.7 GHz',
            'gpu'   =>  'AMD Radeon R5 Graphics (System Shared)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz',
            'unit_weight'   =>  2.1,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.0 (x1) / USB 2.0 (x1) / HDMI / Audio Jack / Multi-Format Card Reader / LAN',
            'features'  =>  'Webcam / Optical Driver (DVD)',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/ideapad/ideapad-300-series/Lenovo-ideapad-330-14AST/p/88IP3000975'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo Ideapad 330s (14, Intel)',
            'slug'  =>  Str::slug('Lenovo Ideapad 330s (14, Intel)', '-'),
            'image' =>  'ideapad-330s-14.png',
            'brand' =>  'Lenovo',
            'price' =>  9000000,
            'processor' =>  'Intel Core i5-8250U, 1.6 GHz quad-core, up to 3.4 GHz',
            'gpu'   =>  'AMD Radeon 535 (2 GB)',
            'ram'   =>  4,
            'storage'   =>  '1 TB HDD',
            'display'   =>  '14" / HD / 768p / 60 Hz / Bezel-less',
            'unit_weight'   =>  1.7,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.0 (x2) / HDMI / Audio Jack / Multi-Format Card Reader',
            'features'  =>  'Webcam',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/ideapad/ideapad-300-series/Lenovo-ideapad-330S-14IKB/p/88IP30S0987'
        ]);

        Alternative::create([
            'name'  =>  'Lenovo Legion Y530',
            'slug'  =>  Str::slug('Lenovo Legion Y530', '-'),
            'image' =>  'legion-y530.png',
            'brand' =>  'Lenovo',
            'price' =>  16900000,
            'processor' =>  'Intel Core i7-8750H, 2.2 GHz hexa-core, up to 4.1 GHz',
            'gpu'   =>  'Nvidia GeForce GTX 1050 (4 GB)',
            'ram'   =>  8,
            'storage'   =>  '1 TB HDD + 16 GB Intel Optane',
            'display'   =>  '15.6" / FHD / 1080p / 60 Hz / Bezel-less',
            'unit_weight'   =>  2.3,
            'connectivity'  =>  'Wi-Fi / Bluetooth',
            'ports' =>  'USB 3.1 C (x1) / USB 3.1 (x3) / HDMI / Audio Jack / Multi-Format Card Reader / LAN / Mini DispayPort',
            'features'  =>  'Webcam / Backlit Keyboard (White)',
            'link'  =>  'https://www.lenovo.com/id/in/laptops/legion/legion-laptops/Lenovo-Legion-Y530-15ICH/p/88GMY501020?queryFlag=8812314297408'
        ]);
    }
}
