Konekt Sylius Sync Bundle
=========================

Usage In Client Code
--------------------

Example 1 Using from within a command

.. code-block:: php

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $erpDataSource = DataSource::create($input->getArgument('inputFile'));
        $erpProducts   = $erpDataSource->getDataRows();

        $productFactory = $this->getContainer()->get('konekt_sylius_sync.remote_product.factory');

        foreach ($erpProducts as $erpProduct) {
            $product = $productFactory->create();
            $product->setSku($erpProduct['code'])
                ->setPrice($erpProduct['net_price']);
        }

        //...
    }


Product
-------

.. code-block:: yaml

    Product:
        sku
        name|tr
        price
        short_description|tr
        description|tr
        taxonomies
        attributes
        options
        images
        shipping_category

Taxon
-----

.. code-block:: yaml

    Taxon:
        taxonomy
        id
        parent_id
        name
        description
        image