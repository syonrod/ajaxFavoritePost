<?php 

$categories  =   [
    [
        'id' => 1, 'name' => 'Venezuela', 'subcategories' => [
            ['id' => '1', 'city' => 'Puerto Ordaz'],
            ['id' => '2', 'city' => 'Caracas'],
            ['id' => '3', 'city' => 'Maracaibo'],
        ]
    ],

    [
        'id' => 2, 'name' => 'Canada', 'subcategories' => [
            ['id' => '1', 'city' => 'Toronto'],
            ['id' => '2', 'city' => 'Montreal'],
            ['id' => '3', 'city' => 'Ottawa'],
        ]
    ],

    [
        'id' => 3, 'name' => 'Usa', 'subcategories' => [
            ['id' => '1', 'city' => 'Miami'],
            ['id' => '2', 'city' => 'Texas'],
            ['id' => '3', 'city' => 'Houston'],
        ]
    ]
];

$category_id = isset($_GET['category_id']) ? (int) $_GET['category_id'] : 0;

foreach ($categories as $category) {
    if ($category['id'] == $category_id) {

        $subcategories = $category['subcategories'];
        foreach ($subcategories as $subcategory) {
            echo "<option value=\"{$subcategory['id']}\">";
            echo $subcategory['city'];
            echo "</option>";
        }
    }
}

?>