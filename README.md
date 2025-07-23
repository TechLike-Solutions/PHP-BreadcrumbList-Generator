# PHP BreadcrumbList Generator

This simple PHP script dynamically generates a JSON-LD BreadcrumbList for SEO-friendly structured data on your website. Easily integrate it into your PHP pages to help search engines understand your site’s hierarchy and improve rich snippets in search results.

## ✨ Features
+ Generates JSON-LD BreadcrumbList dynamically based on the current URL path.
+ Easy to integrate with existing PHP pages.
+ Follows [schema.org](https://schema.org/) standards.
+ Lightweight and dependency-free.

## 📦 Installation

+ Clone or download the repository.
+ Include the script in your PHP page:

```
include 'breadcrumb-generator.php';
```

## 📄 Example Output
```
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://example.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Category",
      "item": "https://example.com/category/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Page",
      "item": "https://example.com/category/page"
    }
  ]
}

```

## 📚 License
This project is open-source and available under the MIT License.

