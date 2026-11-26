<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    private function getMenuData()
    {
        return [
            'categories' => [
                ['id' => 'all', 'name' => 'All Delights'],
                ['id' => 'beverages', 'name' => 'Artisanal Drinks & Coolers'],
                ['id' => 'asian', 'name' => 'Pan-Asian & Dimsums'],
                ['id' => 'starters', 'name' => 'Tapas & Small Plates'],
                ['id' => 'north-indian', 'name' => 'Tandoor & North Indian'],
                ['id' => 'desserts', 'name' => 'Petal Patisserie'],
            ],
            'items' => [
                [
                    'id' => 1,
                    'name' => 'Rose Petal Lychee Blossom Cooler',
                    'category' => 'beverages',
                    'description' => 'Infused fresh pink lychee, Bulgarian rose water, sparkling soda, and organic edible rose petals.',
                    'price' => '₹240',
                    'tag' => 'Signature Drink',
                    'is_chef_special' => true,
                    'image' => 'images/menu/drinks-blossom.jpg',
                    'icon' => 'fa-solid fa-martini-glass-citrus',
                    'gradient' => 'from-rose-100 to-pink-100'
                ],
                [
                    'id' => 2,
                    'name' => 'Sakura Matcha Cream Cloud',
                    'category' => 'beverages',
                    'description' => 'Ceremonial grade Japanese Uji matcha topped with sweet sakura cold foam and white chocolate flakes.',
                    'price' => '₹280',
                    'tag' => 'Insta Viral',
                    'is_chef_special' => false,
                    'image' => 'images/menu/drinks-blossom.jpg',
                    'icon' => 'fa-solid fa-mug-hot',
                    'gradient' => 'from-pink-100 to-emerald-50'
                ],
                [
                    'id' => 3,
                    'name' => 'Pink Truffle Edamame Dimsums',
                    'category' => 'asian',
                    'description' => 'Handcrafted translucent beetroot-tinted dumpling wrapper stuffed with crushed edamame, truffle oil, and water chestnuts.',
                    'price' => '₹360',
                    'tag' => 'Signature Dish',
                    'is_chef_special' => true,
                    'image' => 'images/menu/pink-dimsums.jpg',
                    'icon' => 'fa-solid fa-utensils',
                    'gradient' => 'from-pink-100 to-rose-50'
                ],
                [
                    'id' => 4,
                    'name' => 'Crispy Lotus Stem in Sweet Chili Plum',
                    'category' => 'asian',
                    'description' => 'Wok-tossed crunchy lotus stem glazed with honey chili sauce, toasted sesame, and fresh scallions.',
                    'price' => '₹320',
                    'tag' => 'Crowd Favorite',
                    'is_chef_special' => true,
                    'image' => 'images/menu/dimsums-steamer.jpg',
                    'icon' => 'fa-solid fa-bowl-food',
                    'gradient' => 'from-amber-50 to-pink-50'
                ],
                [
                    'id' => 5,
                    'name' => 'Paneer Pasanda in Rose-Saffron Velvet Gravy',
                    'category' => 'north-indian',
                    'description' => 'Tender paneer batons stuffed with dry fruits and mint, simmered in a velvety cashew and saffron cream sauce.',
                    'price' => '₹420',
                    'tag' => 'Royal Heritage',
                    'is_chef_special' => false,
                    'image' => 'images/about/rooftop-view.jpg',
                    'icon' => 'fa-solid fa-plate-wheat',
                    'gradient' => 'from-amber-100 to-pink-50'
                ],
                [
                    'id' => 6,
                    'name' => 'Dhungar Murgh Tikka (Smoked Rooftop Kebab)',
                    'category' => 'north-indian',
                    'description' => 'Charcoal-infused succulent chicken thighs marinated in hand-ground spices, Greek yoghurt, and Kashmiri deghi chili.',
                    'price' => '₹460',
                    'tag' => 'Chef Choice',
                    'is_chef_special' => true,
                    'image' => 'images/hero/rooftop-sunset.jpg',
                    'icon' => 'fa-solid fa-fire-burner',
                    'gradient' => 'from-orange-100 to-rose-100'
                ],
                [
                    'id' => 7,
                    'name' => 'Avocado Bruschetta on Beetroot Sourdough',
                    'category' => 'starters',
                    'description' => 'House-baked pink sourdough toast, whipped feta mousse, Hass avocado cubes, cherry tomatoes, and balsamic reduction.',
                    'price' => '₹340',
                    'tag' => 'Healthy Bite',
                    'is_chef_special' => false,
                    'image' => 'images/gallery/photo-corner.jpg',
                    'icon' => 'fa-solid fa-bread-slice',
                    'gradient' => 'from-emerald-50 to-pink-100'
                ],
                [
                    'id' => 8,
                    'name' => 'Sakura Berry Crepe Cake',
                    'category' => 'desserts',
                    'description' => 'Twenty layers of paper-thin French pink crepes stacked with mascarpone cream and fresh strawberry compote.',
                    'price' => '₹310',
                    'tag' => 'Must Try',
                    'is_chef_special' => true,
                    'image' => 'images/menu/drinks-blossom.jpg',
                    'icon' => 'fa-solid fa-cake-candles',
                    'gradient' => 'from-rose-100 to-pink-200'
                ],
            ]
        ];
    }

    private function getInstaFeed()
    {
        return [
            [
                'id' => 1,
                'title' => 'Golden Hour on the Rooftop',
                'caption' => 'When dusk descends over Guwahati, our pink blooms and fairy lights come alive. Catch today’s sunset from the lounge! ✨🌸 #SkyMews',
                'likes' => '1,420',
                'category' => 'Ambiance',
                'tag' => '#RooftopVibes',
                'image' => 'images/hero/rooftop-sunset.jpg',
                'rot' => '-2.5deg',
            ],
            [
                'id' => 2,
                'title' => 'The Signature Lychee Blossom',
                'caption' => 'Sweet, floral, and sparkling. Handcrafted with real petals for your afternoon mood boost 🍹🌷 #GuwahatiCafe #MocktailMagic',
                'likes' => '985',
                'category' => 'Drinks',
                'tag' => '#SipOfSummer',
                'image' => 'images/menu/drinks-blossom.jpg',
                'rot' => '3deg',
            ],
            [
                'id' => 3,
                'title' => 'Aesthetic Corners & Paper-Cut Walls',
                'caption' => 'Every corner of Sky Mews is designed to be your personal photo gallery. Come strike a pose under our floral arch! 📸💖',
                'likes' => '2,150',
                'category' => 'Interior',
                'tag' => '#CafeAesthetic',
                'image' => 'images/gallery/photo-corner.jpg',
                'rot' => '-1.5deg',
            ],
            [
                'id' => 4,
                'title' => 'Steaming Truffle Edamame Dimsums',
                'caption' => 'Delicate pink parcels packed with rich flavors. Perfect for sharing (or keeping all to yourself!) 🥟🌸 #PanAsianGhy',
                'likes' => '1,120',
                'category' => 'Food',
                'tag' => '#DimsumLovers',
                'image' => 'images/menu/pink-dimsums.jpg',
                'rot' => '2deg',
            ],
            [
                'id' => 5,
                'title' => 'Date Night Under Fairy Lights',
                'caption' => 'Romantic table settings, candle glow, and acoustic melodies high above the city bustle. Reserve your private booth tonight! 🕯️✨',
                'likes' => '1,890',
                'category' => 'Events',
                'tag' => '#DateNightGhy',
                'image' => 'images/hero/rooftop-sunset.jpg',
                'rot' => '-3deg',
            ],
            [
                'id' => 6,
                'title' => 'Matcha Clouds & Sweet Afternoon Tea',
                'caption' => 'A swirl of emerald green and pastel pink sweetness. Treat your senses at Sky Mews Guwahati 🍵🎀 #TeaTime',
                'likes' => '840',
                'category' => 'Desserts',
                'tag' => '#MatchaMoments',
                'image' => 'images/menu/drinks-blossom.jpg',
                'rot' => '1.8deg',
            ],
        ];
    }

    private function getReviewsData()
    {
        return [
            [
                'name' => 'Ananya Kalita',
                'rating' => 5,
                'date' => '2 days ago',
                'text' => 'Sky Mews is truly the prettiest cafe in Guwahati right now! The pink paper floral archway is gorgeous for Instagram reels and the Lychee Blossom cooler was super refreshing.',
                'tag' => 'Sunset Date Night',
                'avatar' => 'AK'
            ],
            [
                'name' => 'Debajit Sarma',
                'rating' => 5,
                'date' => 'Last week',
                'text' => 'The rooftop view in Wireless Beltola is amazing around 5 PM. Their pink dimsums and tandoori kebabs are top notch. Worth every rupee!',
                'tag' => 'Foodie Gathering',
                'avatar' => 'DS'
            ],
            [
                'name' => 'Meghna Roy',
                'rating' => 5,
                'date' => '2 weeks ago',
                'text' => 'Celebrated my sister’s birthday here. The staff set up the fairy lights and paper flowers beautifully. Best rooftop dining experience in Dispur/Beltola.',
                'tag' => 'Birthday Celebration',
                'avatar' => 'MR'
            ],
            [
                'name' => 'Rohan Goswami',
                'rating' => 5,
                'date' => '3 weeks ago',
                'text' => 'Cozy vibe, aesthetic booths, and delicious Pan-Asian. We ordered the lotus stem and matcha drink—both exceeded our expectations.',
                'tag' => 'Casual Hangout',
                'avatar' => 'RG'
            ],
        ];
    }

    // 1. Homepage
    public function home()
    {
        $menuData = $this->getMenuData();
        $categories = $menuData['categories'];
        $menuItems = array_slice($menuData['items'], 0, 6);
        $instaPosts = array_slice($this->getInstaFeed(), 0, 4);
        $reviews = array_slice($this->getReviewsData(), 0, 3);

        return view('cafe.home', compact('categories', 'menuItems', 'instaPosts', 'reviews'));
    }

    // 2. Our Story (About Page)
    public function about()
    {
        return view('cafe.about');
    }

    // 3. Rooftop Ambiance Page
    public function ambiance()
    {
        $instaPosts = $this->getInstaFeed();
        return view('cafe.ambiance', compact('instaPosts'));
    }

    // 4. Artisanal Menu Page
    public function menu()
    {
        $menuData = $this->getMenuData();
        $categories = $menuData['categories'];
        $menuItems = $menuData['items'];
        return view('cafe.menu', compact('categories', 'menuItems'));
    }

    // 5. Instagram Feed Page
    public function instagram()
    {
        $instaPosts = $this->getInstaFeed();
        return view('cafe.instagram', compact('instaPosts'));
    }

    // 6. Guest Reviews Page
    public function reviews()
    {
        $reviews = $this->getReviewsData();
        return view('cafe.reviews', compact('reviews'));
    }

    // 7. Book Table Page
    public function book()
    {
        return view('cafe.book');
    }

    // Handle Table Reservation POST
    public function reserve(Request $request)
    {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'guests' => 'required|integer|min:1|max:20',
            'date' => 'required|date',
            'time' => 'required|string',
            'seating' => 'nullable|string',
            'notes' => 'nullable|string|max:500',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you ' . $validated['guest_name'] . '! Your table request at Sky Mews has been placed. We will confirm via WhatsApp/SMS shortly.',
        ]);
    }
}
