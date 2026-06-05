# ITMB AI Knowledge Bot

## Overview

This project is an AI-powered internal knowledge assistant designed for ITMB.

The system allows users to ask questions about company services, pricing, workflows, and capabilities, and receive grounded answers based on structured internal documentation.

This is an initial planning and architecture phase (no implementation yet).

---

## Goal

The main goal of this project is to design and build a modular AI system with the following capabilities:

- Company knowledge retrieval
- Context-aware AI responses
- Session-based memory
- Clean separation of retrieval and generation logic
- Simple and extensible architecture

---

## MVP Scope

The first version of the system will include:

- Markdown-based knowledge base
- Basic retrieval mechanism (keyword or similarity-based)
- AI response generation via external API
- Session memory (short-term conversation history)
- Simple web interface for interaction

---

## Planned Architecture

User Input  
→ Controller  
→ Retrieval Layer (Documents)  
→ Context Builder  
→ AI Provider  
→ Memory Layer  
→ Response Output  

This separation is intentional to ensure scalability and maintainability.

---

## Tech Strategy

- Backend: Laravel (chosen for structure and scalability)
- Frontend: Simple Blade + Bootstrap (focus on backend logic)
- AI Provider: External API (Arvan AI or equivalent)
- Storage: Markdown files + lightweight JSON memory (MVP stage)

---

## Design Principles

- Keep the system modular
- Separate retrieval, memory, and generation layers
- Avoid over-engineering in MVP phase
- Optimize for clarity and future extensibility

---

## Future Improvements

After MVP completion, the system can be extended with:

- Semantic search using embeddings
- Vector database integration
- Long-term memory system
- Context compression and summarization
- Admin dashboard for knowledge management
- Multi-user support and analytics

---

## Project Status Update

Phase: **development setup**  

The project has moved from planning phase to initial development setup.

Laravel application structure has been created as the base for implementing the AI system.

Core services and modules will be implemented in upcoming commits.

## Project Status Update

Phase: **Retrieval Design**  

The knowledge base and retrieval layer have been implemented.

The system can now:
- Load company documents
- Perform basic retrieval based on user query
- Prepare context for AI responses (AI integration not yet active)

---

## Current Progress

- Laravel structure initialized
- Knowledge base created (docs/)
- Retrieval service implemented

## Project Status Update

The AI provider and prompt engineering layer have been integrated.

The system can now:
- Retrieve relevant documents
- Build structured prompts
- Send context to AI provider
- Generate AI-powered responses

---

## Current Progress

- Laravel structure initialized
- Knowledge base implemented
- Retrieval layer working
- AI integration completed (initial version)

## Project Status Update

Session-based memory and conversation context have been implemented.

The system can now:
- Maintain conversation history per session
- Use previous messages as context
- Generate context-aware responses
- Provide consistent multi-turn conversations

---

## Current Progress

- Retrieval system implemented
- AI integration completed
- Session memory added

## Project Status Update

A web-based interface has been added to interact with the AI system.

The system now includes:
- Chat UI (web interface)
- End-to-end interaction flow (UI → Backend → AI → Response)
- Evaluation scenarios for testing system behavior

---

## Current Progress

- Knowledge base implemented
- Retrieval system working
- AI integration completed
- Memory system active
- Web interface added

## Future Roadmap

The current MVP validates the core architecture:

Knowledge Base
→ Retrieval
→ Context Building
→ AI Generation
→ Session Memory

Future versions may include:

- Embedding-based retrieval
- Semantic document search
- Long-term memory
- Conversation summarization
- Knowledge management dashboard
- Multi-user support
- Analytics and monitoring

The current implementation prioritizes simplicity and clarity over infrastructure complexity.
