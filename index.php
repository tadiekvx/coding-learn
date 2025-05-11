<?php
class LanguageTutorial
{
    public $name;
    public $description;
    public $icon;
    public $tutorial;
    public $youtubeId;

    public function __construct($name, $description, $icon, $tutorial, $youtubeId)
    {
        $this->name = $name;
        $this->description = $description;
        $this->icon = $icon;
        $this->tutorial = $tutorial;
        $this->youtubeId = $youtubeId;
    }
}

// Sample programming languages with tutorials
$languages = [
    'javascript' => new LanguageTutorial(
        'JavaScript',
        'The language of the web. Essential for front-end and full-stack development.',
        'fab fa-js-square',
        '# JavaScript Fundamentals
        
## Variables
```javascript
let name = "John";
const age = 25;
var isStudent = true;
```

## Functions
```javascript
function greet(name) {
    return `Hello, ${name}!`;
}

// Arrow functions
const add = (a, b) => a + b;
```

## Objects and Arrays
```javascript
const person = {
    name: "Alice",
    age: 30,
    hobbies: ["reading", "coding", "gaming"]
};

const numbers = [1, 2, 3, 4, 5];
const doubled = numbers.map(n => n * 2);
```

## DOM Manipulation
```javascript
const button = document.getElementById("myButton");
button.addEventListener("click", () => {
    document.body.style.backgroundColor = "lightblue";
});
```',
        'PkZNo7MFNFg'
    ),

    'python' => new LanguageTutorial(
        'Python',
        'Versatile language for web development, data science, AI, and automation.',
        'fab fa-python',
        '# Python Basics
        
## Variables and Data Types
```python
name = "Alice"
age = 25
is_student = True
numbers = [1, 2, 3, 4, 5]
person = {"name": "Bob", "age": 30}
```

## Functions
```python
def greet(name):
    return f"Hello, {name}!"

# Lambda functions
square = lambda x: x ** 2
```

## Classes
```python
class Person:
    def __init__(self, name, age):
        self.name = name
        self.age = age
    
    def introduce(self):
        return f"Hi, I\'m {self.name} and I\'m {self.age} years old."
```

## List Comprehensions
```python
squares = [x**2 for x in range(10)]
even_numbers = [x for x in range(20) if x % 2 == 0]
```',
        'rfscVS0vtbw'
    ),

    'java' => new LanguageTutorial(
        'Java',
        'Enterprise-level programming language for building robust applications.',
        'fab fa-java',
        '# Java Programming
        
## Basic Syntax
```java
public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}
```

## Classes and Objects
```java
public class Person {
    private String name;
    private int age;
    
    public Person(String name, int age) {
        this.name = name;
        this.age = age;
    }
    
    public String introduce() {
        return "Hi, I\'m " + name + " and I\'m " + age + " years old.";
    }
}
```

## Inheritance
```java
public class Employee extends Person {
    private String jobTitle;
    
    public Employee(String name, int age, String jobTitle) {
        super(name, age);
        this.jobTitle = jobTitle;
    }
}
```',
        'eIrMbAQSU34'
    ),

    'html' => new LanguageTutorial(
        'HTML',
        'The building block of websites. Essential for creating web page structure.',
        'fab fa-html5',
        '# HTML Basics
        
## Document Structure
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <h1>Welcome to HTML</h1>
</body>
</html>
```

## Common Elements
```html
<!-- Headings -->
<h1>Main Heading</h1>
<h2>Subheading</h2>

<!-- Paragraphs -->
<p>This is a paragraph of text.</p>

<!-- Links -->
<a href="https://example.com">Visit Example</a>

<!-- Images -->
<img src="image.jpg" alt="Description">

<!-- Lists -->
<ul>
    <li>Item 1</li>
    <li>Item 2</li>
</ul>
```

## Forms
```html
<form action="/submit" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <button type="submit">Submit</button>
</form>
```',
        'UB1O30fR-EE'
    ),

    'css' => new LanguageTutorial(
        'CSS',
        'Styling language for designing beautiful and responsive web pages.',
        'fab fa-css3-alt',
        '# CSS Fundamentals
        
## Selectors
```css
/* Element selector */
h1 {
    color: #333;
    font-size: 2rem;
}

/* Class selector */
.button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
}

/* ID selector */
#header {
    background-color: #f8f9fa;
    padding: 20px;
}
```

## Flexbox
```css
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.item {
    flex: 1;
    margin: 10px;
}
```

## Grid
```css
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
```

## Animations
```css
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.fade-in {
    animation: fadeIn 0.5s ease-in;
}
```',
        'OXGznpKZ_sA'
    ),

    'php' => new LanguageTutorial(
        'PHP',
        'Server-side scripting language for building dynamic web applications.',
        'fab fa-php',
        '# PHP Programming
        
## Basic Syntax
```php
<?php
echo "Hello, World!";
?>
```

## Variables and Arrays
```php
$name = "John";
$age = 25;
$isActive = true;

$fruits = ["apple", "banana", "orange"];
$person = [
    "name" => "Alice",
    "age" => 30,
    "email" => "alice@example.com"
];
```

## Functions
```php
function greet($name) {
    return "Hello, " . $name . "!";
}

// Arrow functions (PHP 7.4+)
$double = fn($x) => $x * 2;
```

## Classes
```php
class Person {
    private $name;
    private $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function introduce() {
        return "Hi, I\'m {$this->name} and I\'m {$this->age} years old.";
    }
}
```',
        'OK_JCtrrv-c'
    )
];

// Get selected language from URL parameter
$selectedLang = $_GET['lang'] ?? 'javascript';
$currentLanguage = $languages[$selectedLang] ?? $languages['javascript'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development Learning Hub</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Prism.js for syntax highlighting -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        #sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            transform: translateX(-250px);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        #sidebar.active {
            transform: translateX(0);
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            color: white;
        }

        #sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        #sidebar .nav-link:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-left-color: #00bfa5;
        }

        #sidebar .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.2);
            border-left-color: #00bfa5;
        }

        #sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        #content {
            margin-left: 0;
            transition: margin-left 0.3s ease;
            min-height: 100vh;
        }

        #content.shifted {
            margin-left: 250px;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px 30px;
        }

        #toggleSidebar {
            border: none;
            background: none;
            font-size: 1.5rem;
            color: #6c757d;
            transition: color 0.3s ease;
        }

        #toggleSidebar:hover {
            color: #2a5298;
        }

        .main-content {
            padding: 30px;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .language-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .language-header h1 {
            margin: 0;
            font-size: 2.5rem;
            display: flex;
            align-items: center;
        }

        .language-header h1 i {
            margin-right: 15px;
            font-size: 2rem;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            margin: 30px 0;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 10px;
        }

        .tutorial-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        pre {
            border-radius: 8px;
            overflow-x: auto;
        }

        .loading {
            text-align: center;
            padding: 50px;
            color: #6c757d;
        }

        .loading i {
            font-size: 2rem;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .feature-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-card i {
            font-size: 2.5rem;
            color: #667eea;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            #content {
                margin-left: 0 !important;
            }

            .main-content {
                padding: 20px;
            }

            .language-header {
                padding: 30px 20px;
            }

            .language-header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4><i class="fas fa-code"></i> Learning Hub</h4>
        </div>
        <ul class="nav flex-column">
            <?php foreach ($languages as $key => $lang): ?>
                <li class="nav-item">
                    <a href="?lang=<?php echo $key; ?>"
                        class="nav-link <?php echo $selectedLang === $key ? 'active' : ''; ?>">
                        <i class="<?php echo $lang->icon; ?>"></i>
                        <?php echo $lang->name; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- Overlay for mobile -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <div id="content">
        <nav class="navbar">
            <button id="toggleSidebar">
                <i class="fas fa-bars"></i>
            </button>
            <h5 class="mb-0">Software Development Learning Hub</h5>
        </nav>

        <div class="main-content">
            <?php if ($currentLanguage): ?>
                <div class="language-header">
                    <h1>
                        <i class="<?php echo $currentLanguage->icon; ?>"></i>
                        <?php echo $currentLanguage->name; ?>
                    </h1>
                    <p class="mb-0 mt-2 opacity-90"><?php echo $currentLanguage->description; ?></p>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="tutorial-content">
                            <?php
                            // Convert markdown to HTML (simplified)
                            $content = $currentLanguage->tutorial;
                            $content = preg_replace('/^# (.+)$/m', '<h1>$1</h1>', $content);
                            $content = preg_replace('/^## (.+)$/m', '<h2>$1</h2>', $content);
                            $content = preg_replace('/```(\w+)\n(.*?)```/s', '<pre><code class="language-$1">$2</code></pre>', $content);
                            $content = nl2br($content);
                            echo $content;
                            ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-card">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/<?php echo $currentLanguage->youtubeId; ?>"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <h5>Video Tutorial</h5>
                            <p class="text-muted">Watch this comprehensive video tutorial to learn
                                <?php echo $currentLanguage->name; ?> with practical examples.</p>
                        </div>

                        <div class="feature-card">
                            <i class="fas fa-lightbulb"></i>
                            <h5>Quick Tips</h5>
                            <ul class="text-muted">
                                <li>Practice coding daily</li>
                                <li>Build real projects</li>
                                <li>Join coding communities</li>
                                <li>Read official documentation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="loading">
                    <i class="fas fa-spinner"></i>
                    <p>Loading tutorial...</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Prism.js for syntax highlighting -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const toggleBtn = document.getElementById('toggleSidebar');
            const overlay = document.getElementById('overlay');

            toggleBtn.addEventListener('click', function () {
                sidebar.classList.toggle('active');
                content.classList.toggle('shifted');
                overlay.classList.toggle('active');
            });

            overlay.addEventListener('click', function () {
                sidebar.classList.remove('active');
                content.classList.remove('shifted');
                overlay.classList.remove('active');
            });

            // Smooth scrolling for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Add loading animation when switching languages
            document.querySelectorAll('#sidebar .nav-link').forEach(link => {
                link.addEventListener('click', function (e) {
                    if (!this.classList.contains('active')) {
                        document.querySelector('.main-content').style.opacity = '0.5';
                    }
                });
            });
        });
    </script>
</body>

</html>