<?php
  $teams = array(
    "Baltimore Crabs",
    "Boston Flowers",
    "Breckenridge Jazz Hands",
    "Canada Moist Talkers",
    "Charleston Shoe Thieves",
    "Chicago Firefighters",
    "Dallas Steaks",
    "Hades Tigers",
    "Hawaii Fridays",
    "Houston Spies",
    "Mexico City Wild Wings",
    "Miami Dale",
    "New York Millennials",
    "San Francisco Lovers",
    "Unlimited Tacos",
    "Yellowstone Magic"
  );

  class Item {
    public $itemName = "";
    public $itemCost = "";
    public $itemDesc = "";

    function __construct($name, $cost, $desc, $customOptions) {
      $this->$itemName = $name;
      $this->$itemCost = $cost;
      $this->$itemDesc = $desc;
      $this->$itemCust = $customOptions;
    }
  }
  $items = [
    new Item("8-pack AA batteries", 4.99, "Eight AA-size batteries.", []),
    new Item("12-pack AA batteries", 6.99, "A dozen AA-size batteries.", []),
    new Item("24-pack AA batteries", 11.99, "Two dozen AA-size batteries.", []),
    new Item("8-pack AAA batteries", 4.99, "Eight AAA-size batteries.", []),
    new Item("12-pack AAA batteries", 6.99, "A dozen AAA-size batteries.", []),
    new Item("24-pack AAA batteries", 11.99, "Two dozen AAA-size batteries.", []),
    new Item("Blaseball Cap", 7.99, "A neat wearable hat. Choose your favorite team! Note that some others may be unavailable.", $teams),
    new Item("Blaseball Blatt", 8.99, "A standard-issue blaseball blatt.", []),
    new Item("Blaseball Team Blatt", 9.49, "A blaseball blatt that comes in your team's colors. Note that some colors may be unavailable.", $teams),
    new Item("Dial Tone Replica", 79.99, "A replica of Jessica Telephone's blatt.", [])
  ];
?>
