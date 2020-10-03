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
    public $itemName;
    public $itemCost;
    public $itemDesc;
    public $customOptions;
    public $color;

    function __construct($name, $cost, $desc, $customOptions, $color = "") {
      $this->itemName = $name;
      $this->itemCost = $cost;
      $this->itemDesc = $desc;
      $this->itemCust = $customOptions;
      $this->color = $color;
    }

    function get_name() {
      return $this->itemName;
    }

    function get_cost() {
      return $this->itemCost;
    }

    function get_desc() {
      return $this->itemDesc;
    }

    function get_color() {
      return $this->color;
    }

    function set_color($color) {
      $this->color = $color;
    }

    function get_options() {
      return $this->customOptions;
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
    new Item("Dial Tone Replica", 79.99, "A replica of Jessica Telephone's gunblatt. Does not function if used as a gun or a telephone.", [])
  ];

  function safe_input($input) {
    return htmlspecialchars(trim(stripslashes($input)));
  }
?>
