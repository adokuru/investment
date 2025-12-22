<?php

namespace App\Http\Traits;

trait RespondsWithJson
{
    /**
     * Return a JSON response if the request is an API request, otherwise return the view
     *
     * @param mixed $data
     * @param string|null $view
     * @param array $viewData
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    protected function apiOrView($data, $view = null, $viewData = [])
    {
        $request = request();

        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json($data);
        }

        if ($view) {
            return view($view, $viewData);
        }

        return $data;
    }

    /**
     * Return success JSON response for API, or redirect with message for web
     *
     * @param string $message
     * @param mixed $data
     * @param string|null $redirectRoute
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    protected function successResponse($message, $data = null, $redirectRoute = null)
    {
        $request = request();

        if ($request->expectsJson() || $request->is('api/*')) {
            $response = ['success' => true, 'message' => $message];
            if ($data !== null) {
                $response['data'] = $data;
            }
            return response()->json($response, 200);
        }

        if ($redirectRoute) {
            return redirect()->route($redirectRoute)->with('success', $message);
        }

        return redirect()->back()->with('success', $message);
    }

    /**
     * Return error JSON response for API, or redirect with error for web
     *
     * @param string $message
     * @param int $statusCode
     * @param string|null $redirectRoute
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    protected function errorResponse($message, $statusCode = 400, $redirectRoute = null)
    {
        $request = request();

        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json([
                'success' => false,
                'message' => $message,
                'error' => $message
            ], $statusCode);
        }

        if ($redirectRoute) {
            return redirect()->route($redirectRoute)->with('error', $message);
        }

        return redirect()->back()->with('error', $message);
    }
}