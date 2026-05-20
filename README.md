# Food Service Simulation System

## Overview
This project is a simple **Food Service Simulation System** built with **PHP OOP (Object-Oriented Programming)** principles.  
The system simulates how a restaurant processes customer orders, prepares food, and generates invoices.

The purpose of this project is to practice:

- Object-Oriented Programming (OOP)
- Class relationships
- Inheritance
- Encapsulation
- Namespaces
- Method interaction between classes
- Basic restaurant workflow simulation

---

# Project Structure

```bash
src/
├── FoodItems/
│   ├── FoodItem.php
│   ├── CheeseBurger.php
│   ├── Fettuccine.php
│   ├── HawaiianPizza.php
│   └── Spaghetti.php
│
├── FoodOrders/
│   └── FoodOrder.php
│
├── Invoices/
│   └── Invoice.php
│
├── Persons/
│   ├── Person.php
│   │
│   ├── Customers/
│   │   └── Customer.php
│   │
│   └── Employees/
│       ├── Employee.php
│       ├── Chef.php
│       └── Cashier.php
│
├── Restaurants/
│   └── Restaurant.php
│
└── main.php
```

---

# System Flow

```text
Customer
   ↓
creates FoodOrder
   ↓
Restaurant receives order
   ↓
Chef prepares food
   ↓
Cashier processes payment
   ↓
Invoice generated
```

---

# Main Features

## 1. Food Item Management
Each food item is represented as a class.

Examples:

- CheeseBurger
- Fettuccine
- HawaiianPizza
- Spaghetti

Each item inherits from the base `FoodItem` class.

Example:

```php
class CheeseBurger extends FoodItem
```

---

## 2. Customer Order System

Customers can place orders through the restaurant.

Example:

```php
public function order(Restaurant $restaurant): Invoice {
    return $restaurant->order(
        new FoodOrder($this, $restaurant->menu[0])
    );
}
```

This process:

1. Creates a `FoodOrder`
2. Sends it to the restaurant
3. Returns an `Invoice`

---

## 3. Employee System

Employees inherit from the `Employee` class.

### Chef
Responsible for preparing food.

```php
function prepareFood(FoodOrder $order): FoodItem {
    return $order->getFoodItem();
}
```

### Cashier
Responsible for payment handling and invoice processing.

---

## 4. Invoice Generation

The system generates invoices including:

- Final Price
- Order Time
- Estimated Cooking Time

Example Output:

```text
Invoice Details:

Final Price: $5.99
Order Time: 2026-05-20 14:47:01
Estimated Time: 30 minutes
```

---

# OOP Concepts Used

| Concept | Usage |
|---|---|
| Inheritance | Employee → Chef/Cashier |
| Encapsulation | Private/protected properties |
| Composition | Restaurant contains menu |
| Polymorphism | Different food items handled uniformly |
| Namespaces | Organized project structure |
| Constructor Injection | Objects passed into constructors |

---

# Example Class Relationships

## Customer → Restaurant

```php
$customer->order($restaurant);
```

Customer interacts with Restaurant.

---

## Restaurant → FoodOrder

```php
new FoodOrder($customer, $foodItem)
```

Restaurant processes orders using `FoodOrder`.

---

## Chef → FoodItem

```php
$order->getFoodItem()
```

Chef prepares the ordered food item.

---

# Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend Logic |
| OOP | System Design |
| Namespaces | File Organization |
| VSCode | Development Environment |
| WSL Ubuntu | Runtime Environment |

---

# How to Run

## 1. Clone Repository

```bash
git clone <repository-url>
```

---

## 2. Move to Project Directory

```bash
cd FOOD_SERVICE_SIMULATION
```

---

## 3. Run the Program

```bash
php src/main.php
```

---

# Sample Output

```text
Invoice Details:

Final Price: $5.99
Order Time: 2026-05-20 14:47:01
Estimated Time: 30 minutes
```

---

# Learning Objectives

This project was created to improve understanding of:

- Real-world OOP architecture
- Multi-class interactions
- Namespace management
- System modeling using objects
- Basic backend workflow simulation

---

# Future Improvements

Possible future extensions:

- Multiple customers
- Order queue system
- Cooking time simulation
- Table reservation system
- Database integration
- GUI/Web interface
- Payment methods
- Inventory management
- Multi-threaded kitchen simulation

---

# Author

Kosuke Arii
Computer Science Student at APU  
Interested in Backend Development, Cloud, and Product Engineering

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![OOP](https://img.shields.io/badge/OOP-Object%20Oriented-blue?style=for-the-badge)
![Backend](https://img.shields.io/badge/Backend-Development-green?style=for-the-badge)
![VSCode](https://img.shields.io/badge/Editor-VSCode-007ACC?style=for-the-badge&logo=visualstudiocode&logoColor=white)
![Ubuntu](https://img.shields.io/badge/WSL-Ubuntu-E95420?style=for-the-badge&logo=ubuntu&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-Repository-black?style=for-the-badge&logo=github)
![OOP Design](https://img.shields.io/badge/Design-OOP-orange?style=for-the-badge)
![Simulation](https://img.shields.io/badge/System-Simulation-red?style=for-the-badge)
