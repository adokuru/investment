# Investment API - Postman Collection

This directory contains Postman collection and environment files for testing the Investment API.

## Files

- `Investment_API.postman_collection.json` - Complete API collection with all endpoints
- `Investment_API.postman_environment.json` - Environment variables for local development

## Import Instructions

### 1. Import Collection
1. Open Postman
2. Click **Import** button (top left)
3. Select `Investment_API.postman_collection.json`
4. Click **Import**

### 2. Import Environment
1. Click **Environments** (left sidebar)
2. Click **Import**
3. Select `Investment_API.postman_environment.json`
4. Click **Import**
5. Select the imported environment from the dropdown (top right)

## Setup

### Update Environment Variables

1. Select the **Investment API - Local** environment
2. Update the following variables:
   - `base_url`: Your API base URL (default: `http://localhost:8000`)
   - `user_email`: Your test user email
   - `user_password`: Your test user password

### Authentication Flow

1. **Register** or **Login**:
   - Use the `Authentication > Register` or `Authentication > Login` request
   - For regular users, you'll receive `requires_2fa: true` in the response

2. **Verify 2FA**:
   - Check your email for the 2FA code
   - Use `Authenticated Routes > 2FA > Verify 2FA Code` request
   - The response will include a `token` - **copy this token**

3. **Set Token**:
   - In Postman, go to the environment variables
   - Paste the token into the `token` variable
   - OR use the **Authorization** tab in any request and select "Bearer Token", then paste the token

4. **Use Protected Routes**:
   - All routes under "User Routes" require the token
   - The token is automatically included in requests via the `{{token}}` variable

## Collection Structure

### 1. Authentication
- Register
- Login
- Forgot Password
- Reset Password
- Get Reset Password Token

### 2. Public Information
- Get Investment Plans (Public)
- Get Wallet Types (Public)
- Contact Form

### 3. Authenticated Routes
- Get Current User
- Profile (Get/Update)
- Email Verification
- Password Confirmation
- Logout
- 2FA (Verify/Resend)

### 4. User Routes (Requires 2FA)
- Dashboard
- Wallet (Create)
- Deposit (Get/Prepare/Submit)
- Withdrawal (Get/Prepare/Submit)
- Investment (Get Plans/Details/Submit/List)
- Operations (Transaction History)
- Transfer Earnings
- Settings (Get/Update)
- Support Tickets (Get/Submit)
- Referrals

## Important Notes

### Wallet Types
- `1` = Bitcoin (BTC)
- `2` = Ethereum (ETH)
- `3` = Tether (USDT)
- `4` = Bitcoin Cash (BCH)

### Authentication
- All routes under "User Routes" require:
  - Valid Bearer token
  - User role (not Admin)
  - 2FA verification

### Request Examples

#### Register
```json
{
    "firstName": "John",
    "lastName": "Doe",
    "email": "john.doe@example.com",
    "password": "Password123!",
    "password_confirmation": "Password123!",
    "ref": "optional_referral_token"
}
```

#### Login
```json
{
    "email": "john.doe@example.com",
    "password": "Password123!"
}
```

#### Verify 2FA
```json
{
    "code": "1234"
}
```

#### Submit Investment
```json
{
    "investment": 1,
    "wallet": 1,
    "amount": 500
}
```

#### Submit Deposit
```json
{
    "amount": 100,
    "type": 1,
    "currency": "BTC"
}
```

#### Submit Withdrawal
```json
{
    "amount": 50,
    "type": 1
}
```

#### Update Settings
```json
{
    "btc_address": "1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa",
    "eth_address": "0x742d35Cc6634C0532925a3b844Bc9e7595f0bEb",
    "usdt_address": "0x742d35Cc6634C0532925a3b844Bc9e7595f0bEb",
    "bcc_address": "bitcoincash:qpm2qsznhks23z7629mms6s4cwef74c3wzq0qgv3y"
}
```

#### Submit Ticket
```json
{
    "topic": "Account Issue",
    "content": "I need help with my account balance."
}
```

## Testing Workflow

1. **Start with Public Routes**: Test public endpoints first (Investment Plans, Wallet Types, Contact)

2. **Register/Login**: Create an account or login

3. **Verify 2FA**: Complete 2FA verification to get your token

4. **Update Token**: Set the token in environment variables

5. **Test User Routes**: Start with Dashboard, then test other features

6. **Test Edge Cases**: Try invalid data, insufficient balance, etc.

## Troubleshooting

### 403 Forbidden
- Ensure you've completed 2FA verification
- Check that your token is valid and not expired
- Verify you're using a User account (not Admin)

### 401 Unauthorized
- Check that the token is correctly set in environment variables
- Verify the token format: `Bearer {token}`
- Try logging in again to get a fresh token

### 422 Validation Error
- Check the request body matches the expected format
- Verify all required fields are present
- Check field types (numbers vs strings)

### 500 Server Error
- Check server logs
- Verify database connection
- Check API route configuration

## Environment Variables

| Variable | Description | Example |
|----------|-------------|---------|
| `base_url` | API base URL | `http://localhost:8000` |
| `token` | Bearer authentication token | `1|abc123...` |
| `user_email` | Test user email | `user@example.com` |
| `user_password` | Test user password | `Password123!` |

## Additional Resources

- API Documentation: Check `routes/api.php` for route definitions
- Controller Logic: See `app/Http/Controllers/` for implementation details
- Middleware: Check `app/Http/Middleware/` for authentication and authorization logic

