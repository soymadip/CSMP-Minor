<x-layouts.error 
    :code="$code ?? '500'" 
    :title="$title ?? 'Internal Server Error'" 
    :heading="$heading ?? 'Something went wrong.'" 
    :message="$message ?? 'Our servers encountered an unexpected glitch. Our technical team has been notified. Please try again later.'"
    :actionText="$actionText ?? 'Return to Home'" 
    actionRoute="home"
/>
