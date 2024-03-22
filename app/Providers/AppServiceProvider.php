<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\DetailInputInvoice;
use App\Models\DetailProduct;
use App\Models\DetailPurchaseInvoice;
use App\Models\Employee;
use App\Models\InputInvoice;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductPrice;
use App\Models\Provider;
use App\Models\PurchaseInvoice;
use App\Models\User;
use App\Repositories\AdminRepositoryInterface;
use App\Repositories\AttributeRepositoryInterface;
use App\Repositories\BrandRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\CommentRepositoryInterface;
use App\Repositories\DetailInputInvoiceRepositoryInterface;
use App\Repositories\DetailProductRepositoryInterface;
use App\Repositories\DetailPurchaseInvoiceRepositoryInterface;
use App\Repositories\Eloquent\AdminRepository;
use App\Repositories\Eloquent\AttributeRepository;
use App\Repositories\Eloquent\BrandRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CommentRepository;
use App\Repositories\Eloquent\DetailInputInvoiceRepository;
use App\Repositories\Eloquent\DetailProductRepository;
use App\Repositories\Eloquent\DetailPurchaseInvoiceRepository;
use App\Repositories\Eloquent\EmployeeRepository;
use App\Repositories\Eloquent\InputInvoiceRepository;
use App\Repositories\Eloquent\ProductAttributeRepository;
use App\Repositories\Eloquent\ProductPriceRepository;
use App\Repositories\Eloquent\ProductRepository;
use App\Repositories\Eloquent\ProviderRepository;
use App\Repositories\Eloquent\PurchaseInvoiceRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\EmployeeRepositoryInterface;
use App\Repositories\InputInvoiceRepositoryInterface;
use App\Repositories\ProductAttributeRepositoryInterface;
use App\Repositories\ProductPriceRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProviderRepositoryInterface;
use App\Repositories\PurchaseInvoiceRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AdminRepositoryInterface::class,function () {
            return new AdminRepository(new Admin());
        });

        $this->app->singleton(AttributeRepositoryInterface::class,function () {
            return new AttributeRepository(new Attribute());
        });

        $this->app->singleton(BrandRepositoryInterface::class,function () {
            return new BrandRepository(new Brand());
        });

        $this->app->singleton(CategoryRepositoryInterface::class,function () {
            return new CategoryRepository(new Category());
        });

        $this->app->singleton(CommentRepositoryInterface::class,function () {
            return new CommentRepository(new Comment());
        });

        $this->app->singleton(DetailInputInvoiceRepositoryInterface::class,function () {
            return new DetailInputInvoiceRepository(new DetailInputInvoice());
        });

        $this->app->singleton(DetailProductRepositoryInterface::class,function () {
            return new DetailProductRepository(new DetailProduct());
        });

        $this->app->singleton(DetailPurchaseInvoiceRepositoryInterface::class,function () {
            return new DetailPurchaseInvoiceRepository(new DetailPurchaseInvoice());
        });

        $this->app->singleton(EmployeeRepositoryInterface::class,function () {
            return new EmployeeRepository(new Employee());
        });

        $this->app->singleton(InputInvoiceRepositoryInterface::class,function () {
            return new InputInvoiceRepository(new InputInvoice());
        });

        $this->app->singleton(ProductAttributeRepositoryInterface::class,function () {
            return new ProductAttributeRepository(new ProductAttribute());
        });

        $this->app->singleton(ProductPriceRepositoryInterface::class,function () {
            return new ProductPriceRepository(new ProductPrice());
        });

        $this->app->singleton(ProductRepositoryInterface::class,function () {
            return new ProductRepository(new Product());
        });

        $this->app->singleton(ProviderRepositoryInterface::class,function () {
            return new ProviderRepository(new Provider());
        });

        $this->app->singleton(PurchaseInvoiceRepositoryInterface::class,function () {
            return new PurchaseInvoiceRepository(new PurchaseInvoice());
        });

        $this->app->singleton(UserRepositoryInterface::class,function () {
            return new UserRepository(new User());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
