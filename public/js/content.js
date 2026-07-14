const SITE_CONTENT = {
  brand: {
    logo: "assets/logo1(1).png",
  },

  /* 2. KONTAK & PETA*/
  contact: {
    address: "Jl. Abdul Gani Atas, Kota Batu, Jawa Timur 65311",
    phone: "0800-159-3333",
    phoneLink: "tel:+628001593333",
    whatsappNumber: "6288803300699", // format 62xxxx, dipakai untuk tombol WhatsApp
    whatsappMessage:
      "Halo Kusuma Agrowisata, saya ingin bertanya tentang wisata di sini.",
    email: "info@kusuma.co",
    // Link peta: silakan ganti dengan link "Bagikan > Sematkan peta" dari Google Maps
    mapsEmbedUrl:
      "https://www.google.com/maps?q=Kusuma+Agrowisata+Batu&output=embed",
    mapsLinkUrl:
      "https://www.google.com/maps/search/?api=1&query=Kusuma+Agrowisata+Batu",
    socials: {
      instagram: "https://instagram.com/kusumaagrowisata",
      facebook: "https://facebook.com/kusumaagrowisata",
      youtube: "https://youtube.com",
      tiktok: "https://tiktok.com",
    },
  },


  heroSlides: [
    {
      image: "https://picsum.photos/seed/kusuma-hero-kebun/1920/1080",
      eyebrow: "Sejak 1989",
      title: "Selamat Datang di Kusuma Agrowisata Group",
      subtitle:
        "Wisata petik buah, hotel resort, waterpark, dan produk olahan apel asli Kota Batu — semua dalam satu kawasan sejuk di lereng Gunung Panderman.",
      ctaText: "Jelajahi Wisata",
      ctaLink: "#companies",
    },
    
    {
      image: "https://picsum.photos/seed/kusuma-hero-hotel/1920/1080",
      eyebrow: "Menginap Nyaman",
      title: "Resort & Convention Hotel di Ketinggian 1000 Mdpl",
      subtitle:
        "152 kamar dan cottage asri dikelilingi kebun apel, kolam renang, serta udara pegunungan yang sejuk sepanjang tahun.",
      ctaText: "Lihat Hotel Kami",
      ctaLink: "#companies",
    },
    {
      image: "https://picsum.photos/seed/kusuma-hero-waterpark/1920/1080",
      eyebrow: "Seru untuk Keluarga",
      title: "Basah-basahan Seru di Kusuma Waterpark",
      subtitle:
        "Kolam arus, seluncuran, dan kolam anak — pelengkap keseruan setelah puas memetik buah langsung dari pohonnya.",
      ctaText: "Lihat Layanan",
      ctaLink: "#services",
    },
    {
      image: "https://picsum.photos/seed/kusuma-hero-petik/1920/1080",
      eyebrow: "Favorit Pengunjung",
      title: "Petik Apel, Jeruk & Strawberry Langsung dari Kebun",
      subtitle:
        "Lebih dari 10 jenis buah siap dipetik sendiri bersama keluarga, ditemani pemandu ramah kami.",
      ctaText: "Rencanakan Kunjungan",
      ctaLink: "#contact",
    },
  ],
  stats: [
    { number: "35+", label: "Tahun Berpengalaman" },
    { number: "60+", label: "Hektar Area Wisata" },
    { number: "10+", label: "Jenis Buah Siap Petik" },
    { number: "150+", label: "Kamar Hotel & Cottage" },
  ],

  companies: [
    {
      name: "Kusuma Agrowisata",
      icon: "leaf",
      desc: "Wisata petik apel, jeruk, strawberry & sayur hidroponik langsung dari kebun.",
      image: "assets/logo1.png",
      link: "https://agrowisata.id/",
    },
    {
      name: "Kusuma Hotel & Resort",
      icon: "bed",
      desc: "Resort & Convention Hotel dengan 152 kamar bernuansa kebun apel.",
      image: "assets/hotel.png",
      link: "https://www.kusuma-hotel.com/",
    },
    {
      name: "Kusuma Estate",
      icon: "home",
      desc: "Kawasan hunian asri berkontur perbukitan di Kota Batu.",
      image: "assets/kusuma-estate.png",
      link: "https://estate.kusuma.id/",
    },
    {
      name: "Kusuma Agro Industri",
      icon: "factory",
      desc: "Produk olahan apel asli seperti Siiplah, jenang apel, hingga cuka apel.",
      image: "assets/industri",
      link: "https://industri.kusuma.id/",
    },
  ],

  services: [
    {
      title: "Area & Pemandangan",
      icon: "camera",
      desc: "Berada di lokasi terbaik Kota Batu, area luas di lereng Gunung Panderman dengan udara sejuk sepanjang hari.",
      photos: [
        "https://picsum.photos/seed/area-1/1200/800",
        "https://picsum.photos/seed/area-2/1200/800",
        "https://picsum.photos/seed/area-3/1200/800",
      ],
    },
    {
      title: "Waterpark",
      icon: "waves",
      desc: "Kolam arus, seluncuran, dan kolam anak — keseruan basah-basahan untuk seluruh keluarga.",
      photos: [
        "https://picsum.photos/seed/waterpark-1/1200/800",
        "https://picsum.photos/seed/waterpark-2/1200/800",
        "https://picsum.photos/seed/waterpark-3/1200/800",
      ],
    },
    {
      title: "Petik Buah",
      icon: "apple",
      desc: "Lebih dari 10 jenis buah di kebun kami, siap dipetik langsung oleh Anda dan keluarga.",
      photos: [
        "https://picsum.photos/seed/petik-1/1200/800",
        "https://picsum.photos/seed/petik-2/1200/800",
        "https://picsum.photos/seed/petik-3/1200/800",
      ],
    },
    {
      title: "Kuliner Khas Apel",
      icon: "drink",
      desc: "Siiplah dan TehKu adalah produk andalan kami, diracik langsung dari buah pilihan kebun sendiri.",
      photos: [
        "https://picsum.photos/seed/kuliner-1/1200/800",
        "https://picsum.photos/seed/kuliner-2/1200/800",
        "https://picsum.photos/seed/kuliner-3/1200/800",
      ],
    },
    {
      title: "Home & Villa",
      icon: "villa",
      desc: "Hunian dan vila terbaik di Kota Batu, siap ditempati dengan penawaran spesial.",
      photos: [
        "https://picsum.photos/seed/villa-1/1200/800",
        "https://picsum.photos/seed/villa-2/1200/800",
        "https://picsum.photos/seed/villa-3/1200/800",
      ],
    },
    {
      title: "Party, Event & Wedding",
      icon: "party",
      desc: "Kolam renang, gym, dan berbagai area untuk mewujudkan acara Anda jadi sukses dan berkesan.",
      photos: [
        "https://picsum.photos/seed/event-1/1200/800",
        "https://picsum.photos/seed/event-2/1200/800",
        "https://picsum.photos/seed/event-3/1200/800",
      ],
    },
  ],


  about: {
    sectionTitle: "Tentang Kami",
    sectionSubtitle:
      "Perjalanan panjang dari kebun kecil seluas 1,8 hektar hingga menjadi grup usaha yang menghadirkan kebahagiaan untuk banyak keluarga.",
    items: [
      {
        label: "Pendiri",
        name: "Ir. Edy Antoro",
        icon: "founder",
        image: "https://picsum.photos/seed/kusuma-founder/700/700",
        text: "\u201cKami bukan pelayan uang, bukan pula pelayan harta. Kami bukan orang yang hanya memikirkan untung, untung, dan untung. Tapi kami sadar bahwa kami harus berbuat baik.\u201d",
      },
      {
        label: "Sejarah",
        name: "Kusuma Agrowisata",
        icon: "history",
        image: "https://picsum.photos/seed/kusuma-history/700/700",
        text: "Berawal dari lahan 1,8 hektar pada tahun 1989, kini berkembang menjadi ratusan hektar dan menaungi beberapa perusahaan. Semoga semua ini menjadi berkah bagi kita semua.",
      },
      {
        label: "Masa Depan",
        name: "Bagian dari Lingkaran Kehidupan",
        icon: "future",
        image: "https://picsum.photos/seed/kusuma-future/700/700",
        text: "Kami berkomitmen menjadi perusahaan yang membuat kehidupan manusia lebih bahagia. Industri, Estate, dan Hotel adalah bagian dari perjalanan kami ke depan.",
      },
    ],
  },


  gallery: {
    sectionTitle: "Momen Seru di Kusuma",
    sectionSubtitle:
      "Sedikit cerita dalam foto dari kebun, kolam renang, hingga kamar hotel kami.",
    photos: [
      {
        image: "https://picsum.photos/seed/gallery-1/800/1000",
        caption: "Petik apel bersama keluarga",
      },
      {
        image: "https://picsum.photos/seed/gallery-2/800/600",
        caption: "Sarapan pagi di tengah kebun",
      },
      {
        image: "https://picsum.photos/seed/gallery-3/800/1000",
        caption: "Seluncuran favorit anak-anak",
      },
      {
        image: "https://picsum.photos/seed/gallery-4/800/600",
        caption: "Cottage nyaman berpemandangan gunung",
      },
      {
        image: "https://picsum.photos/seed/gallery-5/800/1000",
        caption: "Produk olahan apel Siiplah",
      },
      {
        image: "https://picsum.photos/seed/gallery-6/800/600",
        caption: "Sore hari di Kusuma Agrowisata",
      },
    ],
  },

  /*9. TESTIMONI*/
  testimonials: [
    {
      name: "Rina, Malang",
      text: "Liburan keluarga paling seru! Anak-anak suka banget petik strawberry dan main di waterpark.",
      rating: 5,
    },
    {
      name: "Budi, Surabaya",
      text: "Hotelnya nyaman, udaranya sejuk, sarapannya enak. Pasti balik lagi.",
      rating: 5,
    },
    {
      name: "Sari, Batu",
      text: "Oleh-oleh Siiplah wajib dibawa pulang, seger banget rasa apelnya.",
      rating: 5,
    },
  ],

  /*10. FOOTER*/
  footer: {
    about:
      "Kusuma Agrowisata Group menghadirkan wisata petik buah, hotel resort, waterpark, hunian, dan produk olahan apel asli Kota Batu sejak 1989.",
    copyrightName: "PT Kusuma Satria Dinasasri Wisatajaya",
  },
};
