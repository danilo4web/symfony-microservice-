<?php declare(strict_types=1);

namespace App\ProductsService\Repository;

/**
 * Class ProductRepository
 *
 * @package   App\ProductsService\Repository
 * @author    Danilo Pereira <danilo4web@gmail.com>
 */
class ProductRepository extends DefaultRepository implements ProductRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getProduct(int $productId): array
    {
        return $this->repositoryAdapter->getProduct($productId);
    }
}
