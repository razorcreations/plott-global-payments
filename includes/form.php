<html>
    <head>
        <script type="text/javascript" src="<?php echo env('APP_URL') ?>/js/app.js"></script>
        <link rel="stylesheet" href="<?php echo env('APP_URL') ?>/css/app.css" />
    </head>
    <body>
        <form method="post">
            <header>
                <p>Payments made via this portal relate to invoices for services that have been arranged by Freightport Logistics.</p>
                <p>All complaints or issues in respect of fee requests raised should be sent by email to <a href="mailto:accounts@freightport.co.uk">accounts@freightport.co.uk</a> in the first instance. No refunds are available.</p>
            </header>

            <?php if (isset($errors) && $errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach ($errors->all() as $error): ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <fieldset>
                <label>
                    Your Name <span class="required">*</span>:
                    <input type="text" name="customer_name" placeholder="Joe Bloggs" required />
                </label>

                <label>
                    Your Email <span class="required">*</span>:
                    <input type="email" name="customer_email" placeholder="joe.bloggs@domain.com" required />
                </label>

                <label>
                    Your Phone Number <span class="required">*</span>:
                    <input type="text" name="customer_phone" placeholder="0123 465 7890" required />
                </label>

                <label>
                    Company <span class="required">*</span>:
                    <input type="text" name="business_name" placeholder="ACME Corp" required />
                </label>

                <label>
                    <?php
                        /**
                         * Mark/Ash, might be worth changing this to a number type
                         * I'm unsure what the invoice numbers look like. Rest
                         * assured its safe to do so should you wish
                         */
                    ?>
                    Invoice Number <span class="required">*</span>:
                    <input type="text" name="invoice_number" placeholder="123456" required />
                </label>

                <label>
                    Invoice Amount <span class="required">*</span>:
                    <input type="number" min="0.01" step="0.01" value="0" name="invoice_amount" placeholder="99.99" required />
                </label>
            </fieldset>

            <fieldset>
                <h3>Your Address:</h3>

                <label>
                    Address line 1 <span class="required">*</span>:
                    <input type="text" name="shippingAddress[address_line_1]" required />
                </label>

                <label>
                    Address line 2:
                    <input type="text" name="shippingAddress[address_line_2]" />
                </label>

                <label>
                    Address line 3:
                    <input type="text" name="shippingAddress[address_line_3]" />
                </label>

                <label>
                    Town/City <span class="required">*</span>:
                    <input type="text" name="shippingAddress[town]" required />
                </label>

                <label>
                    Postcode <span class="required">*</span>:
                    <input type="text" name="shippingAddress[postcode]" maxlength="8" required />
                </label>
            </fieldset>

            <fieldset>
                <h3>Billing Address</h3>

                <label>
                    Use the above address for billing address
                    <input type="checkbox" name="billing_copy" value="1" checked />
                </label>
            </fieldset>

            <fieldset class="billing-details hidden">
                <label>
                    Billing Address line 1 <span class="required">*</span>:
                    <input class="optionallyRequired" type="text" name="billingAddress[address_line_1]" />
                </label>

                <label>
                    Billing Address line 2:
                    <input type="text" name="billingAddress[address_line_2]" />
                </label>

                <label>
                    Billing Address line 3:
                    <input type="text" name="billingAddress[address_line_3]" />
                </label>

                <label>
                    Billing Town/City <span class="required">*</span>:
                    <input class="optionallyRequired" type="text" name="billingAddress[town]" />
                </label>

                <label>
                    Billing Postcode <span class="required">*</span>:
                    <input class="optionallyRequired" type="text" name="billingAddress[postcode]" maxlength="8" />
                </label>
            </fieldset>

            <footer>
                <input type="hidden" name="submitted" value="1" />
                <button>Continue</button>
            </footer>
        </form>
    </body>
</html>