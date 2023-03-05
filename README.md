<p align="center">
    <a href="https://github.com/mustang-framework/mustang/wiki" target="_blank">
        <img src="https://f005.backblazeb2.com/file/mustang-framework/mustan-banner.png" alt="Mustang Banner" width="680">
    </a><br/>
    PHP Framework for building scalable and maintainable API's on top of Laravel.
</p>

## About Mustang
It is designed to help you build scalable PHP API's faster, by providing tools and functionalities that facilitates the development of any API-Centric App.

Mustang integrated the best Laravel compatible tools, packages and conventions in a very creative way, to deliver a rich set of features for a modern PHP Application.

<p align="center">
    <a href="https://github.com/mustang-framework/mustang/wiki" target="_blank">
        <img src="https://f005.backblazeb2.com/file/mustang-framework/mustan-button.png" alt="Mustang Banner" width="260">
    </a><br/>
</p>

## Features
* [SOA](https://en.wikipedia.org/wiki/Service-oriented_architecture) (Service Oriented Architecture) compatible.
* Inherits concepts from the [DDD](https://en.wikipedia.org/wiki/Domain-driven_design) (Domain Driven Design).
* [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) (Model View Controller).
* [ADR](https://en.wikipedia.org/wiki/Action%E2%80%93domain%E2%80%93responder) (Action Domain Responder) architectures.
* Modular / **Containerized** structure.
* Great option for medium to large sized web projects.
* List of convenient design principles such as **SOLID**, **OOP**, **LIFT**, **DRY**, **CoC**, **GRASP**, Generalization, High Cohesion and Low Coupling.

## Documentation

**Mustang** is built using the new architectural pattern **[Porto](https://github.com/Mahmoudz/Porto)**.
> **Porto SAP** is a modern Software Architectural Pattern, designed to help developers organize their Code in a super maintainable way. It is very helpful for big and long term projects, as they tend to have higher complexity with time.

It's completely **optional** to build your application using the Porto architecture.
Alternatively, you can build it using the MVC architecture, and still benefit from all the features of Mustang.

A Mustang application concluded three main layer according the Porto structure:
* Ocean (Framework Layer)<br>
* Ship (Shared Later between different containers)<br>
* Container (Isolated Layer/Service)

<p align="center">
    <a href="https://github.com/Mahmoudz/Porto" target="_blank">
        <img src="https://f005.backblazeb2.com/file/mustang-framework/Containerschiff-text.png" alt="Mustang Architecture" width="500">
    </a><br/>
</p>

```
Laravel Framework 
    └── Mustang Application
        ├── Ship 
        └── Container(s)
            ├── App Section Containers
            └── Vendor Containers
    
```

### [Typical Container Structure](https://github.com/Mahmoudz/Porto#typical-container-structure)
```
Container
	├── Actions
	├── Tasks
	├── Models
	├── Values
	├── Events
	├── Listeners
	├── Policies
	├── Exceptions
	├── Contracts
	├── Traits
	├── Jobs
	├── Notifications
	├── Providers
	├── Configs
	├── Mails
	│   ├── Templates	
	├── Data
	│   ├── Migrations
	│   ├── Seeders
	│   ├── Factories
	│   ├── Criteria
	│   ├── Repositories
	│   ├── Validators
	│   ├── Transporters
	│   └── Rules
	├── Tests
	│   ├── Unit
	│   └── Traits
	└── UI
	    ├── API
	    │   ├── Routes
	    │   ├── Controllers
	    │   ├── Requests
	    │   ├── Transformers
	    │   └── Tests
	    │       └── Functional
	    ├── WEB
	    │   ├── Routes
	    │   ├── Controllers
	    │   ├── Requests
	    │   ├── Views
	    │   └── Tests
	    │       └── Acceptance
	    └── CLI
	        ├── Routes
	        ├── Commands
	        └── Tests
	            └── Functional
```

<p align="center">
    <a href="https://github.com/mustang-framework/mustang/wiki" target="_blank">
        <img src="https://f005.backblazeb2.com/file/mustang-framework/mustan-button.png" alt="Mustang Banner" width="260">
    </a><br/>
</p>

## Contributing

Thank you for considering contributing to the Mustang framework! The contribution guide can be found in the [Mustang documentation](https://github.com/mustang-framework/mustang/wiki/Contributions).

## Code of Conduct

In order to ensure that the Mustang community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Aboozar Ghaffari via [abooazr.ghf@gmail.com](mailto:abooazr.ghf@gmail.com). All security vulnerabilities will be promptly addressed.
## Credits

* [Laravel](https://laravel.com/)
* [Porto](https://github.com/Mahmoudz/Porto)
* [Apiato](http://apiato.io/)

## License

The Mustang framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
