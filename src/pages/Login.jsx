import { Container, VStack, Input, Button, Heading } from "@chakra-ui/react";
import { useState } from "react";

const Login = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleLogin = () => {
    console.log("Logging in with", email, password);
  };

  return (
    <Container centerContent maxW="container.sm" height="100vh" display="flex" flexDirection="column" justifyContent="center" alignItems="center">
      <VStack spacing={4} width="100%">
        <Heading>Login</Heading>
        <Input placeholder="Email" value={email} onChange={(e) => setEmail(e.target.value)} />
        <Input placeholder="Password" type="password" value={password} onChange={(e) => setPassword(e.target.value)} />
        <Button onClick={handleLogin} colorScheme="blue">
          Login
        </Button>
      </VStack>
    </Container>
  );
};

export default Login;
