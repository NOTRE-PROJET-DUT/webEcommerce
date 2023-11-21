# webEcommerce
<br>
<br>

# Laravel Application Installation and Setup

<br>

Follow these steps to install and run a Lapplication from a GitHub repository:

1. **Clone the Repository:**
    ```bash
    https://github.com/NOTRE-PROJET-DUT/webEcommerce.git
    ```

1. **Install Dependencies:**
    ```bash
    composer install
    ```

1. **Create .env File:**
    ```bash
    cp .env.example .env
    ```
    Open the `.env` file and set your database con  details, and any other configurations.
    ```bash
    php artisan key:generate
    ```

1. **Run Database Migrations:**
    ```bash
    php artisan migrate
    ```

1. **Start the Development Server:**
    ```bash
    php artisan serve
    ```
    By default, the application will be accessible at `http://127.0.0.1:8000` .

1. **Access the Application:**
    Open your web browser and navigate to `http://127.0.0.1:8000` (or the specified address if you changed it). You should see your Laravel application up and running.

    These are general steps, and some projects might have additional setup or configuration steps. Always refer to the project's documentation for any specific requirements or instructions.;
<br>
<br>

----
<br>

# Conventional Commit Messages 

<br>

* `feat:`     - Adding a new feature
* `fix:`      - Fixing a bug
* `perf:`     - Improving performance
* `refactor:` - Refactoring code without changing its behavior
* `style:`    - Making code style changes (e.g., formatting, indentation)
* `test:`     - Adding or modifying tests
* `docs:`     - Updating documentation
* `build:`    - Modifying (build system or external dependencies) (e.g.,build tools, CI pipeline, dependencies, project version)
* `ops:`      - Making operational changes (e.g., infrastructure, deployment, backup, recovery)
* `chore:`    - General tasks, maintenance, or other non-categorized changes (e.g., modifying '.gitignore', updating README)
